<?php

require_once "../controllers/processos.controller.php";

class ProcessosController{

    // static public function ctrGetDataProcessos(){

    //     $data = ProcessosModel::mdlGetDataProcessos();
        
    //     return $data;

    // }

    static public function ctrListarProcessos(){

        $processos = ProcessosModel::mdlListarProcessos();

        return $processos;
    }

    static public function ctrRegistrarProcessos($idNup, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada){
        $registroProcessos = ProcessosModel::mdlRegistrarProcessos($idNup, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada); 
        return $registroProcessos;
    }
}