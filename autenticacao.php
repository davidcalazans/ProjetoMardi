<?php

include("conexao.php");

//Autenticacao
//
//
//Obtendo os campos emailLogin e senhaLogin
$emailLogin = $_POST['emailLogin'];
$senhaLogin = MD5($_POST['senhaLogin']);

$verifica = mysql_query("SELECT * FROM usuario WHERE email = '$emailLogin' AND senha = '$senhaLogin'") or die("erro ao selecionar");
if (mysql_num_rows($verifica) <= 0) {
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
    die();
} else {
    session_start();
    setcookie("login", $login);
    header("Location:index.php");
}


?>