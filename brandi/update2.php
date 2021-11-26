<?php 

include 'conecta.php';


$cod_prod = $_REQUEST['cod_produto'];
$tipo = $_REQUEST['tipo'];
$data = $_REQUEST['data_entrada'];
$valor = $_REQUEST['valor'];
$cod = $_REQUEST['cod_usuario'];




$result_cadastro = "UPDATE produtos SET cod_produto='$cod_prod', tipo='$tipo', data_entrada='$data', valor='$valor', cod_usuario='$cod' WHERE cod_produto=$cod_prod";
$conexao->query($result_cadastro);

header('Location: produtoselect.php');

?>