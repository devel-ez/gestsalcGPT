<?php

class Connection{

    static public function connect(){

        try{

            $conn = new PDO("mysql:host=localhost;dbname=gestsalcnew", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;

        }
        catch (PDOException $e){
            echo 'Falhou a conexão com db: ' . $e->getMessage();
        }
    }
}