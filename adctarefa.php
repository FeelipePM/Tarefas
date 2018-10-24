<?php include_once 'top.php'; ?>
<h2 class="titulo">Login</h2>
<form name="adctarefa" method="POST" class="adctarefa" action="src/php/adicionandotarefa.php">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="Titulo..." required>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" placeholder="Descrição..." required>
    <div id="listaTarefas" class="listaTarefas"></div>
    <button type="button" name="adicionar" onclick="adcCheck()">Adicionar Item</button>  
    <div>
        <button type="button" name="salvar" onclick="enviar()">Salvar</button>
        <button type="reset" name="resetar">Limpar</button>
    </div>
    <a href="./tarefa.php"><button type="button" nome="cadastrar">Cancelar</button></a>
</form>
<a href="./recuperar.php">Esqueceu a senha?</a>

<script>
    let qtdmax = 1;
    function adcCheck() {
        if (qtdmax <= 10) {
            let listaTarefas = document.querySelector("#listaTarefas");
            let idItem = "item" + qtdmax;

            let label = listaTarefas.appendChild(document.createElement("label"));
            label.setAttribute('for', idItem);
            label.textContent = "Item " + qtdmax;

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
        inputText.setAttribute('nome', 'itens');
        inputText.setAttribute('hidden');

        let textoItens = "";
        let lista = document.querySelector("#listaTarefas").querySelectorAll("input");
        lista.forEach((el) => {
            textoItens = textoItens + ";" + el.value;
        });
        inputText.value = textoItens;
        form.appendChild(inputText);
    }


</script>

<?php include_once 'bottom.php'; ?>
