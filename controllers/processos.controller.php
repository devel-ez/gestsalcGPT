<?php

require_once "../controllers/processos.controller.php";

class ProcessosController
{

    // static public function ctrGetDataProcessos()
    // {

    //     $data = ProcessosModel::mdlGetDataProcessos();

    //     return $data;
    // }

    static public function ctrListarProcessos()
    {

        $processos = ProcessosModel::mdlListarProcessos();

        return $processos;
    }

    static public function ctrRegistrarProcessos($idNup, $analista, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada, $idDataEntrada)
    {
        $registroProcessos = ProcessosModel::mdlRegistrarProcessos($idNup, $analista, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada, $idDataEntrada);
        return $registroProcessos;
    }

    static public function ctrEditarProcesso($table, $data, $id, $nameId)
    {
        $response = ProcessosModel::mdlEditarProcessos($table, $data, $id, $nameId);

        return $response;
    }


    static public function ctrDeletarProcesso($table, $id, $nameId)
    {

        $response = ProcessosModel::mdlDeletarProcesso($table, $id, $nameId);

        return $response;
    }

    static public function ctrLimparTodosCardsKanban($rowId)
    {
        $response = ProcessosModel::mdlLimparTodosCardsKanban($rowId);

        return $response;
    }

    static public function ctrRegistrarTarefasKanban($rowId, $cardData)
    {
        
        $response = ProcessosModel::mdlRegistrarTarefasKanban($rowId, $cardData);
        
        return $response;
        
    }

    static public function ctrDeletarUnicoCardKanban($rowId, $column, $index)
    {

        $response = ProcessosModel::mdlDeletarUnicoCardKanban($rowId, $column, $index);

        return $response;
    }

    static public function ctrGetKanbanTasks()
    {

        $data = ProcessosModel::mdlGetKanbanTasks();

        return $data;
    }

    static public function ctrListarUsuarios(){

        $usuarios = ProcessosModel::mdlListarUsuarios();

        return $usuarios;

    }

    static public function ctrSalvarProtocoloEntrada($id_processo, $data_entrada, $motivo_entrada, $foto, $nome){
        
        $protocoloEntrada = ProcessosModel::mdlSalvarProtocoloEntrada($id_processo, $data_entrada, $motivo_entrada, $foto, $nome);
        

        return $protocoloEntrada;

    }
}