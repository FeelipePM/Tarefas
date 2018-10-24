<?php include_once 'top.php'; ?>
<h2 class="titulo">Cadastrar</h2>
<form name="cadastrar" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Nome..." required>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email..." required>
    <label for="senha">Senha</label>
    <input type="password" name="senha" placeholder="Senha..." required>    
    <div>
        <button type="submit" name="cadastrar">Cadastrar</button>
        <button type="reset" name="resetar">Limpar</button>
    </div>
    <a href="./index.php"><button type="button" nome="cancelar">Cancelar</button></a>
</form>
<a href="./recuperar.php">Esqueceu a senha?</a>
<?php include_once 'bottom.php'; ?>


