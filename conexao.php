<?php


$usuario = "root";
$senha = "";
$banco = "DBMardi";


//Variavel com a conexao
$con = mysql_connect("localhost", $usuario, $senha);
$db = mysql_select_db($banco);

//Verificando conexão
if (!$con) {
    die("Deu erro!" . mysql_error());
}

//Conexao com o banco
$bd = mysql_select_db("DBMardi", $con);
if (!$bd) {
    die("Erro ao conectar com o banco" . mysql_error());
}
?>