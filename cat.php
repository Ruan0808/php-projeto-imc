<title>Resultado</title>
<link rel="shortcut icon" href="imagens/dieta.ico" type="image/x-icon">
<link rel="stylesheet" href="style.css">
<header>
<h1>Resultado</h1><style>
  h1{
    text-align: center;
  }

</style>
<main>

<?php
 
  $n = $_GET["Nome"] ?? "Sem nome";
  $s = $_GET["sobrenome"] ?? "desconhecido";
  $i = $_GET["idade"] ??"Sem idade ";
  $p = $_GET["peso"] ??"Sem peso ";
if ($i >= 18 and $p <= 80 ) {
  echo"Olá $n $s você tem $i anos e tem um ótimo peso de $p quilos";
}
 
else if ( $i >=18 and $p > 80 and $p < 99) {
  echo"Olá $n $s você tem $i anos e tem um peso ruim de $p quilos";
}
  else if ( $i > 18 and $p > 100) {
    echo"Olá $n $s você tem $i anos e tem um peso muito ruim de $p quilos";
}
else if ( $i < 18 and $p <= 60) {
  echo"Olá $n $s você tem $i anos e tem um peso muito bom de $p quilos";
}
else if ( $i < 18 and $p > 61 and $p < 99) {
  echo"Olá $n $s você tem $i anos e tem um peso ruim de $p quilos";
}
else if ( $i < 18 and $p > 100) {
  echo"Olá $n $s você tem $i anos e tem um peso muito ruim de $p quilos";
}

?>
</main>      
</header>
<main><a href="next.html">Prosseguir para sua dieta</a></main>