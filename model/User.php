<?php
    use dataBase\Connection;
    class User extends Connection{
        private $id;
        private $name;
        private $email;
        private $password;
        private $connect;

        public function constructor($id, $name, $email, $password){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            $this->connect =  $this->getConnection();
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
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }

        public function getPassword(){
            return $this->password;;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function register(){

            $select = mysqli_query($this->connect, "SELECT email FROM users WHERE email = '$this->email'");
            $array = mysqli_fetch_array($select);
            $logarray = $array[$this->email];

            if ($this->email == "" || $this->email == null) {
                echo "<script> alert( 'O campo email deve ser preenchido 
                '); history.back();</script>";
            } else {
                if ($logarray == $this->email) {
                    echo "<script> 
                    alert( 'Esse e-mail já foi cadastrado'); 
                    history.back();</script>";
                } else {
                    $query = "INSERT INTO users (name, email, password) VALUES ('$this->name','$this->email',
                     '$this->password')";
                    return $insert = mysqli_query($this->connect, $query);
                    
                }
            }
        }

        public function check(){

            $verify = mysqli_query($this->connect, "SELECT * FROM users WHERE email = '$this->getEmail()' AND password = '$this->getPassword()'");
            return $verify;
        }

        
    }

    
?>