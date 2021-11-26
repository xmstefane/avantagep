<?php
session_start();
if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true )){
unset($_SESSION['login']);
unset($_SESSION['senha']);
header('location:index.html');
}
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Produtos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="icon" type="imagem/png" href="img/logo.png" />
</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <!--for demo wrap-->
  <center><img src="img/banner_produtos.png"></center>

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          
                <th>C&oacute;digo do Produto</th>
				<th>Tipo</th>
				<th>Valor</th>
				<th>Data de Entrada</th>
								
				<th>Nome do Cliente</th>
          
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
         <?php
										header('Content-type: text/html; charset=ISO-8859-1');
										include 'conecta.php';

										$sql = "SELECT cod_produto, tipo, valor, data_entrada, nome FROM Produtos INNER JOIN  USUARIO ON (produtos.cod_usuario= USUARIO.cod_usuario)";



										$query = $conexao->query($sql);
								while ($dados = $query->fetch_assoc()){
									echo '<tr>';
									echo '<td class="column1">' . $dados["cod_produto"] . '</td>';
									echo '<td class="column2">' . $dados["tipo"] . '</td>';
									echo '<td class="column3">' . $dados["valor"] . '</td>';
									echo '<td class="column4">' . $dados["data_entrada"] . '</td>';
									
									echo '<td class="column5">' . $dados["nome"] . '</td>';
									echo '</tr>'; } 	

							?>
            </tbody>
          </table>  



      </section>    
           <table>
      <tbody>
      <tr>
      <td>  
             <a href="sair.php" class="botão01" style="text-decoration:none">Sair desta p&aacute;gina</a> </td>

      <td>
             <a href="update1.php" class="botão01" style="text-decoration:none">Editar produtos</a> </td>
      <td>
             <a href="zero.php" class="botão01" style="text-decoration:none">Zerar contagem</a> </td>

           </tr>
         </tbody>
       </table>

       <center><iframe src="img/tabela.pdf" width="700" height="500" style="border: none;"></iframe></center>
					
				
        </div>
    </div>
  </div>




<!-- follow me template -->

<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>