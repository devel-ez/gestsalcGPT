<?php

require_once "../controllers/processos.controller.php";
require_once "../models/processos.model.php";

class AjaxProcessos{

    public function ajaxGetDataProcessos(){
        $data = ProcessosController::ctrGetDataProcessos();

        echo json_encode($data);
    }

    public function ajaxListarProcessos(){
        $processos = ProcessosController::ctrListarProcessos();

        echo json_encode($processos);

    }
}

if(isset($_POST['action']) && $_POST['action'] == 1){

    $processos = new AjaxProcessos();
    $processos -> ajaxListarProcessos();
    
}else{
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}