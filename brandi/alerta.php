<!DOCTYPE html>
<html>
<head>
<title>Tutorial de Alert em JavaScript - Linha de Código</title>
</head>
<body>
 
<p>Você irá apagar os produtos deste cleinte zerando sua pontuação, se deseja continuar clique em OK, caso não cancele</p>
 
<button onclick="funcao1()">Clique aqui</button>
 
<p id="demo"></p>
 
<script>
function funcao1()
{
var x;
var r=confirm("Escolha um valor!!!");
if (r==true)
  {
  header('Location: zerando.php.');
  }
else
  {
  header('Location: produtoselect.php.');
  }
document.getElementById("demo").innerHTML=x;
}

</script>
 
</body>
</html>