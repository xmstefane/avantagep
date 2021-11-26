<?php 

include ("conecta.php");




$nome = $_REQUEST['nome'];
$login = $_REQUEST['login'];
$cpf = $_REQUEST['cpf'];
$rg = $_REQUEST['rg'];
$data = $_REQUEST['data_nasc'];
$senha = $_REQUEST['senha'];





$result_cadastro = "INSERT INTO usuario(nome, login, cpf, rg, data_nasc, senha, cod_admin) VALUES('$nome','$login', '$cpf', '$rg', '$data', '$senha' , '1')";

$conexao->query($result_cadastro);
header('location: login.php');


?>