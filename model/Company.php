<?php

namespace model;

use ArrayObject;
use dataBase\Connection;
use mysqli;

class Company{

        private $name;
        private $federation;
        private $connection;

        public function constructor($name, $federation){
            $this->name = $name;
            $this->federation = $federation;
            $this->connection = Connection::getConnection();
        
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getFederation(){
            return $this->federation;
        }

        public function setFederation($federation){
            $this->federation = $federation;
        }

        public static function create(){
            $select = mysqli_query($this->connect, "SELECT name FROM companys WHERE name = '$this->getName()'");
            $array = mysqli_fetch_array($select);
            $logarray = $array[$this->getName()];

            if ($this->getName() == "" || $this->getName() == null) {
                echo "<script> alert( 'O campo nome deve ser preenchido 
                '); history.back();</script>";
            
            }else{
                if ($logarray == $this->getName()) {
                    echo "<script> 
                    alert( 'Essa empresa junior já foi cadastrada'); 
                    history.back();</script>";
                } else {
                    return $insert = mysqli_query($this->connect, "INSERT INTO company (name, federation) VALUES 
                    ('$this->getName()','$this->getFederation()')");
                    
                }
            }    
        
        }

        public static function edit(){
            $select = mysqli_query($this->connect, "SELECT id FROM companys WHERE id = '$this->getId()'");
            $array = mysqli_fetch_array($select);
            $logarray = $array[$this->getId()];

            if ($this->getId() == "" || $this->getId == null) {
                echo "<script> alert( 'O campo id deve ser preenchido 
                '); history.back();</script>";
            
            }else{
                if ($logarray == $this->getId()) {
                    return $update = mysqli_query($this->connect, "UPDATE companys SET name = $this->getName(),
                     federation = $this->getFederation() WHERE id = $this->getId()");
                } 
            }
        }

        public static function delete(){
            $select = mysqli_query($this->connect, "SELECT id FROM companys WHERE id = '$this->getId()'");
            $array = mysqli_fetch_array($select);
            $logarray = $array[$this->getId()];

            if ($this->getId() == "" || $this->getId == null) {
                echo "<script> alert( 'O campo id deve ser preenchido 
                '); history.back();</script>";
            
            }else{
                if ($logarray == $this->getId()) {
                    return $update = mysqli_query($this->connect, "DELETE FROM companys WHERE id = $this->getId()");
                } 
            }
        }

        public static function listAll(){
            $select = mysqli_query($this->connect, "SELECT * FROM companys");
            
            $arrayCompanys = new ArrayObject();

            if(mysqli_num_rows($select)<=0){
                return $arrayCompanys;

            }else{
                while($array = mysqli_fetch_assoc($select)){
                    $companys = new Company();
    
                    $companys->setId($array['id']);
                    $companys->setName($array['name']);
                    $companys->setFederation(($array['federation']));
    
                    $arrayCompanys->append($companys);
                }
                return $arrayCompanys;
            }
            
            

        }

        

    }

?>