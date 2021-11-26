
<?php
session_start();
if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true )){
unset($_SESSION['login']);
unset($_SESSION['senha']);
header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clientes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images3/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css3/util.css">
	<link rel="stylesheet" type="text/css" href="css3/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

			<img src="images3/banner1.png">	
			
					<table>
						

						<thead>
							<tr class="table100-head">
								<th class="column1">Nome</th>
								<th class="column2">Nascimento</th>
								<th class="column3">CPF</th>
								<th class="column4">RG</th>
								<th class="column5">Login</th>
								<th class="column6">Senha</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1"> <?php
										header('Content-type: text/html; charset=ISO-8859-1');
										

									 require 'conecta.php';
								    //Criar a conexao
								    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
								    
								    $pesquisar = $_REQUEST['pesquisa'];
								    $result_cursos = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
								    $resultado_cursos = mysqli_query($conexao, $result_cursos);
								    
								    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
								        echo $rows_cursos['nome']."<br>";
								    }

								?></td>

								</tr>
								
								
						</tbody><br><br>
						

					</table>
					<br><br>
					<button type="submit" class="btn btn-light"><a href="sair.php">Sair</a></button>
					<br>
					<br>
					<br> 
					
						<button type="submit" class="btn btn-light"><a href="cadprodutos.php">Cadastrar Produtos</a></button>
					
					

				</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor3/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/bootstrap/js/popper.js"></script>
	<script src="vendor3/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js3/main.js"></script>

</body>
</html>
