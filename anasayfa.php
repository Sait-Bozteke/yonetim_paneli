<?php
include("ayar.php");


if($_SESSION["giris"]==sha1(md5("var"))){ 
    header("Location:anasayfa.php");
}

 
 
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div style="text-align:center ;">
<button><a href="anasayfa.php">ANASAYFA</a></button>
<button><a href="portfolyo.php">PORTFOLYO</a></button>
<button><a href="hakkimizda.php">HAKKIMIZDA</a></button>
<button><a href="hizmetlerimiz.php">HIZMETLERIMIZ</a></button>
<button><a href="projelerimiz.php">PROJELERIMIZ</a></button>
<button><a href="cikis.php" onclick="if(!confirm('Cikis yapmak istediginize eminmisiniz')) return false">CIKIS</a></button>

<h2 style="text-align:center ;">Menuden Secim Yapiniz</h2>






  </div>  
</body>
</html>