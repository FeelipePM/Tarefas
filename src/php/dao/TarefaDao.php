<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TarefaDao
 *
 * @author MP
 */
//autera isso para testa na tua maquina
$path = 'C:\xampp\htdocs\heydev\Tarefas';
require_once 'FabricaConexao.php';
require_once $path . '\src\php\modelos\Tarefa.php';
require_once $path . '\src\php\modelos\Usuario.php';

class TarefaDao {

    private $conn = null;

    function __construct() {
        $this->conn = FabricaConexao::pegarConexao();
    }

    function __destruct() {
        $this->conn = null;
    }

    function inserirTarefa(Tarefa $tarefa) {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "INSERT INTO `tarefas`(`titulo`, `descricao`, `dataCriacao`, `dataLimite`, `idUsuario`, `ativa`) "
                    . "VALUES (:t,:d,:dateC,:dateL,:idU,:a) ";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':t', $tarefa->getTitulo());
            $stmt->bindValue(':d', $tarefa->getDescricao());
            $stmt->bindValue(':dateC', $tarefa->getDataCriacao());
            $stmt->bindValue(':dateL', $tarefa->getDataLimite());
            $stmt->bindValue(':idU', $tarefa->getIdUsuario());
            $stmt->bindValue(':a', $tarefa->getAtiva());
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deletar($idTarefa, $idUsuario) {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "DELETE FROM `tarefas` WHERE idTarefas=" . $idTarefa . " and idUsuario=" . $idUsuario;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function atualizar(Tarefa $tarefa) {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "UPDATE `tarefas` SET `idTarefas`=:id,"
                    . "`titulo`=:t,"
                    . "`descricao`=:d,"
                    . "`dataCriacao`=:dateC,"
                    . "`dataLimite`=:dateL,"
                    . "`idUsuario`=:idU,"
                    . "`ativa`=:a "
                    . "WHERE idTarefas=:id";

            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(':id', $tarefa->getIdTarefa());
            $stmt->bindValue(':t', $tarefa->getTitulo());
            $stmt->bindValue(':d', $tarefa->getDescricao());
            $stmt->bindValue(':dateC', $tarefa->getDataCriacao());
            $stmt->bindValue(':dateL', $tarefa->getDataLimite());
            $stmt->bindValue(':idU', $tarefa->getIdUsuario());
            $stmt->bindValue(':a', $tarefa->getAtiva());


            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function listarTarefas(Usuario $u) {
        $stmt = $this->conn->query("SELECT * FROM tarefas where idUsuario=" . $u->getIdUsuario());
        $listaTarefas = array();

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tarefa = new Tarefa($linha['titulo'], $linha['descricao'], $linha['dataLimite']);
            $tarefa->setIdTarefa($linha['idTarefas']);
            $tarefa->setDataCriacao($linha['dataCriacao']);
            $tarefa->setIdUsuario($linha['idUsuario']);
            $tarefa->setAtiva($linha['ativa']);

            array_push($listaTarefas, $tarefa);
        }
        return $listaTarefas;
    }

    function buscarTarefa($idTarefa, $idUsuario) {
        $stmt = $this->conn->query("SELECT * FROM tarefas where idTarefas=" . $idTarefa . " and idUsuario=" . $idUsuario);

        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);

        $tarefa = new Tarefa($rs['titulo'], $rs['descricao'], $rs['dataLimite']);
        $tarefa->setIdTarefa($rs['idTarefas']);
        $tarefa->setDataCriacao($rs['dataCriacao']);
        $tarefa->setIdUsuario($rs['idUsuario']);
        $tarefa->setAtiva($rs['ativa']);
        $stmt = NULL;
        return $tarefa;
    }

}
