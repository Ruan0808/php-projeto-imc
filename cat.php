<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["Nome"] ?? "Sem nome";
        $s = $_GET["sobrenome"] ?? "desconhecido";
        $i = $_GET["idade"] ??"Sem idade ";
        $p = $_GET["peso"] ??"Sem peso ";
      if ($i >= 18 and $p <=80 ) {
        echo"Olá $n, $s você tem $i anos e tem um ótimo peso de $p quilos";
      }
  // se não, se ...  
    else if ( $i >=18 and $p > 80) {
        echo"Olá $n, $s você tem $i anos e tem um peso  ruim de $p quilos";
    }
        else if ( $i >=18 and $p > 110) {
          echo"Olá $n, $s você tem $i anos e tem um peso muito ruim de $p quilos";
      }
      else if ( $i < 18 and $p <= 60) {
        echo"Olá $n, $s você tem $i anos e tem um peso muito bom de $p quilos";
      }
      else if ( $i < 18 and $p > 60) {
        echo"Olá $n, $s você tem $i anos e tem um peso ruim de $p quilos";
      }
      else if ( $i < 18 and $p > 100) {
        echo"Olá $n, $s você tem $i anos e tem um peso muito ruim de $p quilos";
      }?>      
</body>
</html>