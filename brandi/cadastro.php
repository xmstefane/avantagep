<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastrar</title>
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
				<form method="POST" action="cadastra.php" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-mood"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Cadastrar-se
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu nome">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu email">
						<input class="input100" type="text" name="login" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu CPF">
						<input class="input100" type="text" name="cpf" placeholder="CPF">
						<span class="focus-input100" data-placeholder="&#xf324;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu RG">
						<input class="input100" type="text" name="rg" placeholder="RG">
						<span class="focus-input100" data-placeholder="&#xf326;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque sua data de nascimento">
						<input class="input100" type="date" name="data_nasc" placeholder="Data de nascimento">
						<span class="focus-input100" data-placeholder="&#xf204;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Coloque sua senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Cadastrar
						</button>
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