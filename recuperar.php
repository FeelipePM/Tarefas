<?php include_once 'top.php'; ?>
<h2 class="titulo">Recuperar senha</h2>
<form name="recuperar" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email..." required>
    <div>
        <button type="submit" name="logar">Enviar</button>
        <button type="reset" name="resetar">Limpar</button>
    </div>
    <a href="./index.php"><button type="button" nome="cancelar">Cancelar</button></a>
</form>
<?php include_once 'bottom.php'; ?>
