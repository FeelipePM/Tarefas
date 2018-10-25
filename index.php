<?php include_once 'top.php'; ?>
<h2 class="titulo">Login</h2>
<form class="btn-padrao" name="login" method="POST" action="src/php/logar.php">
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email..." required>
    <label for="senha"></label>
    <input type="password" name="senha" placeholder="Senha..." required>    
    <div class="btn-padrao">
        <button class="espacamento" type="submit" name="logar">Login</button>
        <button class="btn-laranja" type="reset" name="resetar">Limpar</button>
    </div>
    <a class="btn-padrao" href="./cadastrar.php"><button type="button" nome="cadastrar">Cadastre-se</button></a>
</form>
<a class="esqueceu-senha" href="./recuperar.php">Esqueceu a senha?</a>
<?php include_once 'bottom.php'; ?>
