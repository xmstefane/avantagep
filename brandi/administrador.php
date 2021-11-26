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
  <title>Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="icon" type="imagem/png" href="img/logo.png" />
</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <!--for demo wrap-->
<center><img src="img/banner_cliente.png"></center>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Login</th>
                
          
          
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

                    $sql = "SELECT nome, data_nasc,cpf, rg, login, senha FROM USUARIO";

                    $query = $conexao->query($sql);
                while ($dados = $query->fetch_assoc()){
                  echo '<tr>';
                  echo '<td class="column1">' . $dados["nome"] . '</td>';
                  echo '<td class="column2">' . $dados["data_nasc"] . '</td>';
                  echo '<td class="column3">' . $dados["cpf"] . '</td>';
                  echo '<td class="column4">' . $dados["rg"] . '</td>';
                  echo '<td class="column5">' . $dados["login"] . '</td>';
                  
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
             <a href="cadprodutos.php" class="botão01" style="text-decoration:none">Cadastrar produtos</a> </td>
      <td>
             <a href="produtoselect.php" class="botão01" style="text-decoration:none">Ver produtos cadastrados</a> </td>

           </tr>
         </tbody>
       </table>


        </div>
    </div>
  </div>





<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>