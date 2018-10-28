<?php include_once 'top.php'; ?>
<?php include_once './src/php/dao/TarefaDao.php'; ?>
<h2 class="titulo">Minhas Tarefas</h2>

<label for="filtro">Filtro</label>
<input type="search" name="filtro" placeholder="Filtro..." class="focus"/>
<a class="btn-padrao" href="adctarefa.php"><button type="button" name="adcTarefa">Adicionar Tarefa</button></a>
<table class="espacamento">
    <thead>
        <tr class="titulo-tabela">
            <th>ID</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Data Criação</th>
            <th>Data Fim</th>
            <th>Estado</th>
            <th colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $usuario = new Usuario();
        $usuario->setIdUsuario(1);
        $dao = new TarefaDao();
        $tarefas = $dao->listarTarefas($usuario);
        if (count($tarefas) <= 0) {
            echo '<tr><td colspan="7" style="color:red">Sem tarefas</td></tr>';
        }
        foreach ($tarefas as $tarefa):
            ?>
            <tr class="titulo-tabelas" style="<?php
            if ($tarefa->getAtiva() == 1) {
                echo "color: #000";
            } else {
                echo "color: #777";
            }
            ?>">
                <td class="tituloItem"><?= $tarefa->getIdTarefa() ?></td>
                <td class="tituloItem"><?= $tarefa->getTitulo() ?></td>
                <td class="descricao"><?= substr($tarefa->getDescricao(), 0, 30) ?></td>
                <td class="dataCriacao"><?= $tarefa->getDataCriacao() ?></td>
                <td class="dataFim"><?= $tarefa->getDataLimite() ?></td>
                <td class="tituloItem">
                    <?php
                    if ($tarefa->getAtiva() == 1)
                        echo 'Ativo';
                    else
                        echo 'Concluido';
                    ?>
                </td>
                <?php
                if ($tarefa->getAtiva() == 1)
                    echo "<td><a href='editarTarefa.php?id=". $tarefa->getIdTarefa() . "' ' title='Editar'><img class='icones' src='src/img/editar.png' alt='editar'></a></td>";
                else
                    echo '<td><img class="icones" src="src/img/editar.png" title="Concluido" alt="editar"></td>';
                ?>
                <?php ?>            
                <td><a href="src/php/controles/deletarTarefa.php?id=<?= $tarefa->getIdTarefa() ?>" title="Deletar"><img class="icones" src="src/img/iconlixeira.png" alt="lixeira"></a></td>
            </tr>
            <?php
        endforeach;
        ?>
    </tbody>
</table>

<?php include_once 'bottom.php'; ?>
