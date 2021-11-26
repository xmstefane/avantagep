<?php 

$servidor= 'localhost';
$usuario='root';
$senha='';
$banco='avantage_nv';

//Conexão utilizando os parâmetros acima

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

//Caso algo de errado ocorra, exibe mensagem de erro

if (mysqli_connect_errno()){
	echo "Erro de conexão";

}
 
?>