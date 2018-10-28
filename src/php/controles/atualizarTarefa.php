<?php

require_once("../modelos/Tarefa.php");
require_once("../dao/TarefaDao.php");

$tarefa = new Tarefa($_POST['titulo'], $_POST['descricao'], $_POST['datalimite']);

$tarefa->setDataCriacao($_POST['datacriacao']);
$tarefa->setAtiva($_POST['ativo']);
$tarefa->setIdUsuario($_POST['idUsuario']);
$tarefa->setIdTarefa($_POST['idTarefa']);

try {
    $tDao = new TarefaDao();
    $tDao->atualizar($tarefa);
    header('Location: ../../../taskbord.php');
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
