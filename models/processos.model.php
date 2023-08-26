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
            // echo $key . " = :" . $key . "<br>"; // Imprime o resultado atual
        }

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

    static public function mdlDeletarProcesso($table, $id, $nameId)
    {

        try {
            $historico_data_entrada_saida = "historico_data_entrada_saida";

            $stmt = Connection::connect()->prepare("DELETE FROM $historico_data_entrada_saida WHERE $nameId = :$nameId");

            $stmt->bindParam(":" . $nameId,  $id,  PDO::PARAM_INT);

            $stmt->execute();
        } catch (Exception $e) {
            $response = 'Exception capturada no mdlDeletar:' . $e->getMessage();
        }



        $stmt = Connection::connect()->prepare("DELETE FROM $table WHERE $nameId = :$nameId");

        $stmt->bindParam(":" . $nameId,  $id,  PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return Connection::connect()->errorInfo();
        }
    }

    static public function mdlRegistrarTarefasKanban($rowId, $cardData)
    {


        try {
            $conn = Connection::connect();

            $stmt = $conn->prepare("INSERT INTO kanban_tasks (id_processo, title, description) VALUES (:rowId, :title, :description)");



            foreach ($cardData as $card) {
                $title = $card['title'];
                $description = $card['description'];

                $stmt->bindParam(":rowId", $rowId, PDO::PARAM_INT);
                $stmt->bindParam(":title", $title, PDO::PARAM_STR);
                $stmt->bindParam(":description", $description, PDO::PARAM_STR);

                
                $response = "ok"; // Suponhamos que tudo correu bem

                if (!$stmt->execute()) {

                    return "erro no mdlRegistrarTarefasKanban";
                    return Connection::connect()->errorInfo();
                }
            }

            return $response;
        } catch (Exception $e) {
            return 'Exception capturada:' . $e->getMessage();
        } finally {
            $stmt = null;
            $conn = null;
        }
    }

    // static public function mdlAtualizarPosicaoTarefa($taskId, $newPosition)
    // {

    //     try {
    //         $conn = Connection::connect();

    //         $stmt = $conn->prepare("UPDATE kanban_tasks SET position = :newPosition WHERE id = :taskId");

    //         $stmt->bindParam(":newPosition", $newPosition, PDO::PARAM_INT);
    //         $stmt->bindParam(":taskId", $taskId, PDO::PARAM_INT);

    //         if ($stmt->execute()) {
    //             return "ok";
    //         } else {
    //             return "Error";
    //         }
    //     } catch (Exception $e) {
    //         return 'Exception capturada:' . $e->getMessage();
    //     } finally {
    //         $stmt = null;
    //         $conn = null;
    //     }
    // }
}
