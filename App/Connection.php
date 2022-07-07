<?php 
namespace App;

use \PDO;
use PDOException;

abstract class Connection{
    public static function getDb(){ #Create the connection to BD
        try{
            $conn = new PDO("mysql:host=localhost;dbname=mvc;","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "Successful connection";
        }catch(PDOException $Erro){
            return $Erro->getMessage();
            echo "WARNING ". $Erro;
        }
    }
}

?>