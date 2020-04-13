<?php
namespace controllers;
use model\Company;
use mysqli;

class CompanyController{

    private $company;

    public function __construct(){
        $this->company = new Company;
    }
    

    public static function index(){
        
    }

    public static function create(){
       header("Location:create.php");
    }

    public function store(){
        $this->company->setName($_POST['name']);
        $this->company->setFederation($_POST['federation']);

        $insert = $this->company->create();
        if(mysqli_num_rows($insert)>= 0){
            $this->create();
        }else{
            echo "<script>alert('Não foi possível cadastrar essa empresa');</script>";
            header("Location:dashboard.php");
        }

    }

    public static function edit($id){
        $this->company->setId($id);
        header("Location:edit.php");

    }

    public function update($id){
       
        $this->company->setName($_POST['name']);
        $this->company->setFederation($_POST['federation']);

        $edit = $this->company->edit();
        if(mysqli_num_rows($edit)<=0){
            echo "<script> alert( 'Não foi possível alterar as informações'); history.back();</script>";
        }else{
            $this->update($id);
        }
    }

    public static function delete($id){
        header("Location:delete.php");

    }

    public static function all(){
        $list = $this->company->listAll();
    }

    public function erase(){
        $this->company->setId($_POST['id']);
        $delete = $this->company->delete();
        
        if(mysqli_num_rows($delete) <=0){
            echo "<script> alert( 'Não foi possível deletar a empresa'); history.back();</script>";
        }else{
            header("Location:dashboard.php");
        }
        
    }

   

}