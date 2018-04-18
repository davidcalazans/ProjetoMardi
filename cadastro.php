<?php

include("conexao.php");


//Cadastra usuario
//
//
//Recuperando os valores do formulario
$nome = $_POST['nomeUsuario'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);

//Verificando se já existe o email cadastrado
$result = mysql_query("SELECT COUNT(*) as total from usuarios where email='$email'");
$data = mysql_fetch_assoc($result);

if ($data['total'] >= 1) {

    //Montando a query
    $sql = "INSERT INTO usuario (nomeUsuario, email, senha, dataCadastro, dataUltimoAcesso) VALUES ('$nome', '$email', '$senha', now(), now())";

    //Executando a query
    $query = mysql_query($sql);

    //Verficando se foi inserido
    if (!$query) {
        die("ERRO!" . mysql_error());
    }
}
else {
    echo "Já existe esse email!";
}

?>