<?php

require 'connection.model.php';

class UsuarioModel
{


/* -------------------------------------------------------------------------- */
/*                                Login usuario                               */
/* -------------------------------------------------------------------------- */
    public static function mdlIniciarSessao($usuario, $senha)
    {
        $stmt = Connection::connect()->prepare("SELECT * 
                                                FROM usuarios u 
                                                INNER JOIN perfis p
                                                ON u.id_perfil_usuario = p.id_perfil
                                                INNER JOIN perfil_modulo pm
                                                ON pm.id_perfil = u.id_perfil_usuario
                                                INNER JOIN modulos m
                                                ON m.id = pm.id_modulo
                                                WHERE u.usuario = :usuario
                                                AND view_inicio = 1
                                                AND u.chave = :senha ");

        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        
        $stmt->execute();

        //Retornar só o primeiro registro
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
