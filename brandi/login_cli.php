<?php
session_start();
require ('conecta.php');

$login = !empty($_REQUEST['login'])?$_REQUEST['login']:'';
$senha = !empty($_REQUEST['senha'])?$_REQUEST['senha']:'';
$cod = !empty($_REQUEST['cod_usuario'])?$_REQUEST['cod_usuario']:'';


if($login&&$senha){

	$consulta = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;//retorna o nº de linhas encontrados com email e senha
	$resultado_usuario = mysqli_fetch_assoc($resultado);

	if($registros<>0){

		$_SESSION['cod_usuario'] = $resultado_usuario['cod_usuario'];
		$_SESSION['login'] = $resultado_usuario['login'];
		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['cpf'] = $resultado_usuario['cpf'];
		$_SESSION['rg'] = $resultado_usuario['rg'];
		$_SESSION['senha'] = $resultado_usuario['senha'];
		header('Location: cliente.php');//joga usuario para pg restrita

	}

	else{
		
		header('Location: index.html');//joga usuario de volta para index.html
	}
}

	else{
		header('Location: index.html');//joga usuario de volta para index.html
	}

?>