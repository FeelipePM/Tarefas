<?php

require_once("../dao/TarefaDao.php");
try {
    $tDao = new TarefaDao();
    $tDao->deletar($_GET['id'], '1');
    header('Location: ../../../taskbord.php');
} catch (PDOException $ex) {
    echo $ex->getMessage();
}