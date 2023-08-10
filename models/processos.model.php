<?php

require_once "connection.model.php";

class ProcessosModel
{

    // static public function mdlGetDataProcessos()
    // {

    //     $stmt = Connection::connect()->prepare("SELECT * FROM processos");
    //     $stmt->execute();

    //     return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }

    static public function mdlListarProcessos(){

        $stmt = Connection::connect()->prepare('call prc_listarProcessosFaseInterna');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}
