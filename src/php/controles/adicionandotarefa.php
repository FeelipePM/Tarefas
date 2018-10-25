<?php

require_once("../modelos/Tarefa.php");
require_once("../dao/TarefaDao.php");

$tarefa = new Tarefa($_POST['titulo'], $_POST['descricao'], $_POST['datalimite']);

$tarefa->setAtiva(true);
$tarefa->setIdUsuario(1);

try {
    $tarefaDao = new TarefaDao();
    $tarefaDao->inserirTarefa($tarefa);
    header('Location: ../../../taskbord.php');
} catch (Exception $ex) {
    echo 'Erro:' . $ex->getMessage();
}



