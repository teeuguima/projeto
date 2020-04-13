<?php
    use dataBase\Connection;
    class User{
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
            $this->connect =  Connection::getConnection();
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

        public static function register(){

            $select = mysqli_query($this->connect, "SELECT email FROM users WHERE email = '$this->getEmail()'");
            $array = mysqli_fetch_array($select);
            $logarray = $array[$this->getEmail()];

            if ($this->getEmail() == "" || $this->getEmail() == null) {
                echo "<script> alert( 'O campo email deve ser preenchido 
                '); history.back();</script>";
            } else {
                if ($logarray == $this->getEmail()) {
                    echo "<script> 
                    alert( 'Esse e-mail já foi cadastrado'); 
                    history.back();</script>";
                } else {
                    $query = "INSERT INTO users (name, email, password) VALUES ('$this->getName()','$this->getEmail()',
                     '$this->getPassword()')";
                    return $insert = mysqli_query($this->connect, $query);
                    
                }
            }
        }

        public static function check(){

            $verify = mysqli_query($this->connect, "SELECT * FROM users WHERE email = '$this->getEmail()' AND password = '$this->getPassword()'");
            return $verify;
        }

        
    }

    
?>