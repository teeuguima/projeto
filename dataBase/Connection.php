<?php
namespace dataBase;

abstract class Connection{
    private static $connection;
    
    public static function getConnection(){
        if(!self::$connection){
            self::$connection = mysqli_connect("localhost", "root", "05101322", "backend");
        }
        return self::$connection;
    }

    

}