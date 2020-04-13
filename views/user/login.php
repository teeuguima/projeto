<?php
    session_start(); 
?>
<html>
    <form action="/Projeto/user/check" name="login" method="post">
        <input name="email" placeholder="email">        
        <input name="password" placeholder="password">
        <button type="submit" > Entrar </button> 
        <a href="register.php" >Cadastrar</a>       
    </form>
</html>