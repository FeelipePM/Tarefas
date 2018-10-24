<?php include_once 'top.php'; ?>
<h2 class="titulo">Recuperar senha</h2>
<form class="btn-padrao" name="recuperar" method="POST">
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email..." required>
    <div>
        <a class="btn-padrao"><button class="espacamento" type="submit" name="logar">Enviar</button></a>
        <a class="btn-padrao"><button class="btn-laranja" type="reset" name="resetar">Limpar</button></a>
    </div>
    <a class="btn-padrao" href="./index.php"><button class="btn-vermelho" type="button" nome="cancelar">Cancelar</button></a>
</form>
<?php include_once 'bottom.php'; ?>
