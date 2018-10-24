<?php include_once 'top.php'; ?>
<h2 class="titulo">Minhas Tarefas</h2>

<a href="adctarefa.php"><button type="button" name="adcTarefa">Adicionar Tarefa</button></a>
<label for="filtro">Filtro</label>
<input type="search" name="filtro" placeholder="Filtro..."/>
<table>
    <thead>
        <th>Descrição</th>
        <th>Data Criação</th>
        <th>Data Fim</th>
    </thead>
    <tbody>
        <tr class="item">
            <td class="descricao"></td>
            <td class="dataCriacao"></td>
            <td class="dataFim"></td>
        </tr>
    </tbody>
</table>

<?php include_once 'bottom.php'; ?>
