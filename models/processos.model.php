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

    static public function mdlListarProcessos()
    {

        $stmt = Connection::connect()->prepare('call prc_listarProcessosFaseInterna');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlRegistrarProcessos($idNup, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada)
    {
        try {
                $stmt = Connection::connect()->prepare("INSERT INTO processos(
                NUP, 
                tipo_processo_origem, 
                numero_processo_origem, 
                requisitante, 
                selFase, 
                assunto_objeto, 
                descricao_detalhada_objeto) 
                
            VALUES(
                :idNup, 
                :selProcesso, 
                :idNrProcesso,
                :selRequisitante, 
                :selFase, 
                :idDescricaoResumida, 
                :idDescricaoDetalhada)");

                $stmt->bindParam(":idNup", $NUP, PDO::PARAM_STR);
                $stmt->bindParam(":selProcesso", $tipo_processo_origem, PDO::PARAM_STR);
                $stmt->bindParam(":idNrProcesso", $numero_processo_origem, PDO::PARAM_STR);
                $stmt->bindParam(":selRequisitante", $requisitante, PDO::PARAM_STR);
                $stmt->bindParam(":selFase", $selFase, PDO::PARAM_STR);
                $stmt->bindParam(":idDescricaoResumida", $assunto_objeto, PDO::PARAM_STR);
                $stmt->bindParam(":idDescricaoDetalhada", $descricao_detalhada_objeto, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $response = "Ok";
            } else {
                $response = "Error";
            }
        } catch (Exception $e) {
            $response = 'Exception capturada:' . $e->getMessage();
        }

        return $response;
        $stmt = null;
    }
}
