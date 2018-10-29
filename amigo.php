<?php include_once 'top.php'; ?>

<h2 class="titulo">Amigos</h2>
<form class="btn-padrao">
  <input type="text" name="amigo" placeholder="Amigo" class="focus"/> 
  <input type="text" name="email-amigo" placeholder="E-mail" class="focus"/>
</form>

<a class="btn-padrao" href="#"><button type="button" name="adcTarefa">Adicionar Amigo</button></a>
<table class="espacamento">
    <thead>
        <tr class="titulo-tabela">
            <th>Amigo</th>
            <th>E-mail</th>
        </tr>
        <tr>
          <td>Marcos</td>
          <td>Marcos@gmail.com</td>
        </tr>
        <tr>
          <td>Felipe Machado</td>
          <td>Feelipe.PM@gmail.com</td>
        </tr>
    </thead>
    <tbody>

<?php include_once 'bottom.php'; ?>