<?php

    session_start();
?>
<html>
    
    <form action="/Projeto/user/register" method="POST" name="register">
    <label>Nome</label><input type="text" name="name" id="name"><br>
    <label>E-mail</label><input type="text" name="email" id="email"><br>
    <label>Senha</label><input type="password" name="password" id="password"><br>
    <input type="submit" value="Cadastrar">    
    </form>

</html>

