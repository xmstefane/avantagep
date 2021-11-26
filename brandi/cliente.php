
<?php
session_start();
if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true )){
unset($_SESSION['login']);
unset($_SESSION['senha']);
unset($_SESSION['cod_usuario']);
header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="imagem/png" href="img/logo.png" />
</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <!--for demo wrap-->
<center><img src="img/banner_perfil.png"></center>
  <div class="tbl-header">

    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Seus Produtos</th>
          <th>Sua Pontua&ccedil;&atilde;o</th>
          
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php


                include 'conecta.php';
                $cod_user = $_SESSION['cod_usuario'];


                $sql = "SELECT tipo,valor FROM Produtos WHERE cod_usuario = $cod_user ";
                $query = $conexao->query($sql);
                while ($dados = $query->fetch_assoc()){
                  echo '<tr>';
                  echo '<td class="column2">' . $dados["tipo"] . '</td>';
                  echo '<td class="column3">' . $dados["valor"] . '</td>';
                  echo '</tr>'; }   

              ?>
            </tbody>
          </table>  



          <table>
              <tbody>
                <tr>
                  <td class="column3">
                    <?php
                    include 'conecta.php'; // conexão com o banco de dados
                    $cod_user = $_SESSION['cod_usuario']; 
                    //$sql = "SELECT valor FROM produtos WHERE cod_usuario = $cod_user ";

                    //$query = $conexao->query($sql);
                    $sql = "SELECT SUM(valor) as soma FROM produtos WHERE cod_usuario = $cod_user ";
                    $sql = $conexao->query($sql);
                    $row = $sql->fetch_assoc();
                    $soma = $row['soma'];

                    echo 'Total de pontos: '.$soma .'<br>' . '<br>' . '     Seu código de usuário é: ' . $cod_user;
?>
                  </td>
                </tr>
              </tbody>
            <br><br>
          </table>
            </form>
          </table>    
          </section>

           
            <a href="sair.php" class="botão01" style="text-decoration:none">Sair desta p&aacute;gina</a> <br>
          
          
          <br>
          <br>
        
          
          

        </div>
    </div>
  </div>



<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>