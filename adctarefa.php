<?php include_once 'top.php'; ?>
<h2 class="titulo">Adicionar Tarefa</h2>
<form name="adctarefa" method="POST" class="adctarefa" action="src/php/controles/adicionandotarefa.php">
    <label for="titulo"></label>
    <input type="text" name="titulo" placeholder="Titulo..." size="50" required>
    <br>
    <label for="datalimite"></label>
    <input type="date" name="datalimite" required>
    <label for="descricao"></label>
    <br>    
    <!--<input type="text" name="descricao" placeholder="Descrição..." required>-->
    <textarea name="descricao" placeholder="Descrição..." required></textarea>
    <div id="listaTarefas" class="listaTarefas"></div>
    <!--<button type="button" name="adicionar" onclick="adcCheck()">Adicionar Item</button>  -->
    <div>
    <a class="btn-padrao espacamento"><button type="submit" name="salvar">Salvar</button></a>
    <a class="btn-padrao"><button type="reset" name="resetar">Limpar</button></a>
    </div>
    <a class="btn-padrao" href="./tarefa.php"><button type="button" nome="cadastrar">Cancelar</button></a>
</form>
<!--
<script>
    let qtdmax = 1;
    function adcCheck() {
        if (qtdmax <= 10) {
            let listaTarefas = document.querySelector("#listaTarefas");
            let idItem = "item" + qtdmax;

            let label = listaTarefas.appendChild(document.createElement("label"));
            label.setAttribute('for', idItem);
            label.textContent = "Subtarefa " + qtdmax;

            let microTarefa = listaTarefas.appendChild(document.createElement("input"));
            microTarefa.setAttribute('name', idItem);
            microTarefa.setAttribute('type', 'text');
            microTarefa.setAttribute('placeholder', 'Tarefa...');

            listaTarefas.appendChild(document.createElement("br"));

            qtdmax++;
        } else {
            alert("Não é possivel adicionar mais tarefas")
        }
    }
    function enviar() {
        let form = document.querySelector(".adctarefa");
        let inputText = document.createElement("input");
        inputText.setAttribute('type', 'text');
        inputText.setAttribute('name', 'itens');

        inputText.setAttribute('hidden', '');

        let textoItens = "";
        let lista = document.querySelector("#listaTarefas").querySelectorAll("input");
        lista.forEach((el) => {
            textoItens = textoItens + el.value + ";";
        });
        inputText.setAttribute('value', textoItens);
        form.appendChild(inputText);
        form.submit();
    }


</script>
-->
<?php include_once 'bottom.php'; ?>
