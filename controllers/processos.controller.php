<?php

require_once "../controllers/processos.controller.php";
require_once "../models/processos.model.php";

class ProcessosController{

    static public function ctrGetDataProcessos(){

        $data = ProcessosModel::mdlGetDataProcessos();
        
        return $data;

    }
}