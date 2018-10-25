<?php include_once 'top.php'; ?>
<h2 class="titulo">Detalhes da Tarefa</h2>

<div class="conteudoTarefa">
    <p class="tituloTarefa"><?= "" ?></p>
    <p class="descricaoTarefa"><?= "" ?></p>
    <p class="dataCriacao"><?= "" ?></p>
    <p class="dataFim"><?= "" ?></p>
    <div class="checklist">
        <?= "aa-1;bb-2;cc-3;" ?>
    </div>
</div>

<script>
    window.onload(){
        let textoChecklist = document.querySelector(".checklist").textContent;
        let listaCheck = [];
        
        listaCheck = listaCheck.split(';');
        
        
        
    }
</script>
<?php include_once 'bottom.php'; ?>
