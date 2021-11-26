<?php 

include 'conecta.php';


							

$cod = $_REQUEST['cod_usuario'];


$result_cadastro = "UPDATE produtos SET valor = 0 where produtos.cod_usuario = $cod";
$conexao->query($result_cadastro);
header('Location: produtoselect.php');

?>
