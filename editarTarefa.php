<?php
include_once 'top.php';

require_once './src/php/dao/TarefaDao.php';

$tDao = new TarefaDao();
$tarefa = $tDao->buscarTarefa($_GET['id'],1);
?>
<h2 class="titulo">Editar Tarefa</h2>
<form name="adctarefa" method="POST" class="adctarefa" action="src/php/controles/atualizarTarefa.php">

    <input type="text" name="idTarefa" value="<?= $_GET['id'] ?>" hidden>
    <input type="text" name="idUsuario" value="<?= 1 ?>" hidden>
    <label for="titulo"></label>
    <input type="text" name="titulo" value="<?= $tarefa->getTitulo() ?>" placeholder="Titulo..." size="50" required>
    <br>
    <label for="datalimite"></label>
    <input type="date" value="<?= $tarefa->getDataLimite() ?>" name="datalimite" required>
    <label for="datacriacao"></label>
    <input type="date" value="<?= $tarefa->getDataCriacao() ?>" name="datacriacao" required>
    <label for="ativo" id="labelAtivo"></label>
    <?php
    if ($tarefa->getAtiva()) {
        ?>
        <input type="checkbox" value="1" name="ativo" id="ativo" checked>
        <?php
    } else {
        ?>
        <input type="checkbox" value="0" name="ativo"  id="ativo" >
        <?php
    }
    ?>

    <label for="descricao"></label>
    <br>    
    <textarea name="descricao" placeholder="Descrição..." required><?= $tarefa->getDescricao() ?></textarea>

    <a class="btn-padrao espacamento"><button type="submit" name="salvar">Salvar</button></a>
    <a class="btn-padrao"><button type="reset" name="resetar">Limpar</button></a>
    <a class="btn-padrao" href="./taskbord.php"><button type="button" nome="cadastrar">Cancelar</button></a>

    <script>


        let check = document.querySelector("#ativo");

        window.addEventListener('load', () => {
            if (check.value == 1) {
                document.querySelector("#labelAtivo").textContent = "Ativo";
            } else {
                document.querySelector("#labelAtivo").textContent = "Inativo";
            }
        });

        check.addEventListener('click', () => {
            if (check.checked) {
                document.querySelector("#labelAtivo").textContent = "Ativo";
            } else {
                document.querySelector("#labelAtivo").textContent = "Inativo";
            }
        });

    </script>

</form>
<?php include_once 'bottom.php'; ?>
