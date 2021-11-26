<?php
session_start();
//apaga dados da sessão ativa
unset(
$_SESSION['cod_usuario'],
$_SESSION['nome'],
$_SESSION['login'],
$_SESSION['rg'],
$_SESSION['data_nasc'],
$_SESSION['cpf'],
$_SESSION['senha']

);

//redirecionar o usuario para a pagina de login
header("Location: index.html");

?>