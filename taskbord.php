<?php include_once 'top.php'; ?>
<?php include_once './src/php/dao/TarefaDao.php'; ?>
<h2 class="titulo">Minhas Tarefas</h2>

<label for="filtro">Filtro</label>
<input type="search" name="filtro" placeholder="Filtro..."/>
<a class="btn-padrao" href="adctarefa.php"><button type="button" name="adcTarefa">Adicionar Tarefa</button></a>
<table class="espacamento">
    <table class="btn-padrao customizacao">
    <tr class="titulo-tabela">
      <th>ID</th>
      <th>Titulo</th>
      <th>Descrição</th>
      <th>Data Criação</th>
      <th>Data Fim</th>
      <th>Estado</th>
      <th colspan="2">Ações</th>
    </tr>
    <tr class="tarefas-tabela">
      <td>1</td>
      <td>Marco</td>
      <td>PHP</td>
      <td>24/10/18</td>
      <td>25/10/18</td>
      <td>Em Aberto</td>
      <td><img class="icones" src="img/editar.png" alt="editar"></td>
      <td><img class="icones" src="img/iconlixeira.png" alt="lixeira"></td>
    </tr>
    <tr class="tarefas-tabela">
      <td>2</td>
      <td>Marco</td>
      <td>PHP</td>
      <td>24/10/18</td>
      <td>25/10/18</td>
      <td>Em Aberto</td>
      <td><img class="icones" src="img/editar.png" alt="editar"></td>
      <td><img class="icones" src="img/iconlixeira.png" alt="lixeira"></td>
    </tr>     
</table>
<tbody>
    <?php
    $dao = new TarefaDao();
    $tarefas = $dao->listarTarefas();
    foreach ($tarefas as $tarefa):
        ?>

        <tr class="item">
            <td class="tituloItem"><?= $tarefa->getIdTarefa() ?></td>
            <td class="tituloItem"><?= $tarefa->getTitulo() ?></td>
            <td class="descricao"><?= $tarefa->getDescricao() ?></td>
            <td class="dataCriacao"><?= $tarefa->getDataCriacao() ?></td>
            <td class="dataFim"><?= $tarefa->getDataLimite() ?></td>
            <td class="tituloItem">
                <?php
                    if($tarefa->getAtiva()==1)
                        echo 'Ativo';
                    else
                        echo 'Inativo';
                ?>
            </td>
        </tr>
        <?php
    endforeach;
    ?>
</tbody>
</table>

<?php include_once 'bottom.php'; ?>
