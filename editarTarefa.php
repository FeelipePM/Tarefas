<?php
include_once 'top.php';
include_once './src/php/modelos/Tarefa.php';
include_once './src/php/dao/TarefaDao.php';

$id = $_GET['id'];
$t = new $Tarefa("","","");
$t->setIdTarefa($id);
$t->setIdUsuario(1);

$tarefaDao = new $TarefaDao();
$tarefa = $TarefaDao->buscarTarefa($tarefa);
?>
<h2 class="titulo">Adicionar Tarefa</h2>
<form name="adctarefa" method="POST" class="adctarefa" action="src/php/controles/atualizarTarefa.php">
    <label for="titulo"></label>
    <input type="text" name="titulo" value="<?= $tarefa->getTitulo() ?>" placeholder="Titulo..." size="50" required>
    <br>
    <label for="datalimite"></label>
    <input type="date" value="<?= $tarefa->getDataLimite() ?>" name="datalimite" required>
    <label for="descricao"></label>
    <br>    
    <textarea name="descricao" value="<?= $tarefa->getDescricao() ?>" placeholder="Descrição..." required></textarea>

    <a class="btn-padrao espacamento"><button type="submit" name="salvar">Salvar</button></a>
    <a class="btn-padrao"><button type="reset" name="resetar">Limpar</button></a>
    <a class="btn-padrao" href="./taskbord.php"><button type="button" nome="cadastrar">Cancelar</button></a>
</form>
<?php include_once 'bottom.php'; ?>
