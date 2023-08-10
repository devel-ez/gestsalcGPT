<?php

require_once "../controllers/processos.controller.php";

class ProcessosController{

    static public function ctrGetDataProcessos(){

        $data = ProcessosModel::mdlGetDataProcessos();
        
        return $data;

    }

    static public function ctrListarProcessos(){

        $processos = ProcessosModel::mdlListarProcessos();

        return $processos;
    }
}