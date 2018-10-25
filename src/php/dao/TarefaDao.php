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
require_once $path.'\src\php\modelos\Tarefa.php';
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

    function listarTarefas() {
        $stmt = $this->conn->query("SELECT * FROM tarefas;");
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

}
