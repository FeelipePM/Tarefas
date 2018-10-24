<?php include_once 'top.php'; ?>
<h2 class="titulo">Cadastre-se</h2>
<form class="btn-padrao" name="cadastrar" method="POST">
    <label for="nome"></label>
    <input type="text" name="nome" placeholder="Nome..." required>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email..." required>
    <label for="senha"></label>
    <input type="password" name="senha" placeholder="Senha..." required>    
    <div>
    <a class="btn-padrao"><button class="espacamento" type="submit" name="cadastrar">Cadastrar</button></a>
    <a class="btn-padrao"><button class="btn-laranja" type="reset" name="resetar">Limpar</button></a>
    </div>
    <a class="btn-padrao" href="./index.php"><button class="btn-vermelho" type="button" nome="cancelar">Cancelar</button></a>
</form>
<a class="esqueceu-senha" href="./recuperar.php">Esqueceu a senha?</a>
<?php include_once 'bottom.php'; ?>


