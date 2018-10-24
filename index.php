<?php include_once 'top.php'; ?>
<h2 class="titulo">Login</h2>
<form name="login" method="POST" action="logar.php">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email..." required>
    <label for="senha">Senha</label>
    <input type="password" name="senha" placeholder="Senha..." required>    
    <div>
        <button type="submit" name="logar">Logar</button>
        <button type="reset" name="resetar">Limpar</button>
    </div>
    <a href="./cadastrar.php"><button type="button" nome="cadastrar">Cadastrar</button></a>
</form>
<a href="./recuperar.php">Esqueceu a senha?</a>
<?php include_once 'bottom.php'; ?>
