<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastrar Produtos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="imagem/png" href="img/logo.png" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts2/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images2/bg-04.jpg');">
			<div class="wrap-login100">
				<form  action="cadastraprod.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-file-plus"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Cadastrar Produtos
					</span>

					<div class="wrap-input100 validate-input" data-validate = "tipo">
						<input class="input100" type="text" name="tipo" placeholder="Coloque o nome do Produto">
						<span class="focus-input100" data-placeholder="P"></span>
					</div>

			<div class="wrap-input100 validate-input" data-validate = "data_entrada">
						<input class="input100" type="text" name="data_entrada" placeholder="Coloque a Data de hoje">
						<span class="focus-input100" data-placeholder="????"></span>
					</div>

							<div class="wrap-input100 validate-input" data-validate = "valor">
						<input class="input100" type="int" name="valor" placeholder="Coloque o Valor">
						<span class="focus-input100" data-placeholder="????"></span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "cod_usuario">
						<input class="input100" type="int" name="cod_usuario" placeholder="Coloque o C??digo do Cliente">
						<span class="focus-input100" data-placeholder="????"></span>
					</div>
					

					

					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-light">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/bootstrap/js/popper.js"></script>
	<script src="vendo2r/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/daterangepicker/moment.min.js"></script>
	<script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js2/main.js"></script>

</body>
</html>