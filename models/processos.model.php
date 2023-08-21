<?php

require_once "connection.model.php";

class ProcessosModel
{

    static public function mdlGetDataProcessos()
    {

        $stmt = Connection::connect()->prepare("SELECT * FROM processos");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlListarProcessos()
    {

        $stmt = Connection::connect()->prepare('call prc_listarProcessosFaseInterna');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlRegistrarProcessos($idNup, $selProcesso, $idNrProcesso, $selRequisitante, $selFase, $idDescricaoResumida, $idDescricaoDetalhada, $idDataEntrada)
    {
        try {
            $stmt = Connection::connect()->prepare("INSERT INTO PROCESSOS(
                NUP, 
                tipo_processo_origem, 
                numero_processo_origem, 
                requisitante, 
                situacao, 
                assunto_objeto, 
                descricao_detalhada_objeto,
                data_entrada)

            VALUES(
                :idNup, 
                :selProcesso, 
                :idNrProcesso,
                :selRequisitante, 
                :selFase, 
                :idDescricaoResumida, 
                :idDescricaoDetalhada,
                :idDataEntrada)");


            $stmt->bindParam(":idNup", $idNup, PDO::PARAM_STR);
            $stmt->bindParam(":selProcesso", $selProcesso, PDO::PARAM_STR);
            $stmt->bindParam(":idNrProcesso", $idNrProcesso, PDO::PARAM_STR);
            $stmt->bindParam(":selRequisitante", $selRequisitante, PDO::PARAM_STR);
            $stmt->bindParam(":selFase", $selFase, PDO::PARAM_STR);
            $stmt->bindParam(":idDescricaoResumida", $idDescricaoResumida, PDO::PARAM_STR);
            $stmt->bindParam(":idDescricaoDetalhada", $idDescricaoDetalhada, PDO::PARAM_STR);
            $stmt->bindParam(":idDataEntrada", $idDataEntrada, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $response = "ok";
            } else {
                $response = "Error";
            }
        } catch (Exception $e) {
            $response = 'Exception capturada:' . $e->getMessage();
        }

        return $response;
        $stmt = null;
    }

    static public function mdlEditarProcessos($table, $data, $id, $nameId)
    {

        $set = "";

        foreach ($data as $key => $value) {

            $set .= $key . " = :" . $key . ",";
        }


        echo $set;

        // foreach ($set as $key => $value) {
        //     echo "$set: $value\n";
        // }


        // echo 'Valor do set: '.$set. '  ' . 'Valor da key:  '. $key;

        $set = substr($set, 0, -1);

        $stmt = Connection::connect()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

        foreach ($data as $key => $value) {

            $stmt->bindParam(":" . $key, $data[$key], PDO::PARAM_STR);
        }

        $stmt->bindParam(":" . $nameId, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return Connection::connect()->errorInfo();
        }
    }
}
