<?php 

include 'conecta.php';




$tipo = $_REQUEST['tipo'];
$data_entrada = $_REQUEST['data_entrada'];
$valor = $_REQUEST['valor'];
$cod_usuario = $_REQUEST['cod_usuario'];







$result_cadastro = "INSERT INTO PRODUTOS(tipo, data_entrada, valor, cod_usuario) VALUES('$tipo', '$data_entrada', '$valor', '$cod_usuario')";

$conexao->query($result_cadastro);
header('Location: produtoselect.php');

?>