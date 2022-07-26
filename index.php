<?php
include("ayar.php");



if($_POST){
$kullanici=$_POST["kullanici"];
$sifre=$_POST["sifre"];

$sorgu = $baglan->query("select * from kullanici where (kullanici='$kullanici' && sifre='$sifre')");

$kayitsay=$sorgu->num_rows;

if($kayitsay>0){

// setcookie("kullanici", "$kullanici", time()*60*60);
$_SESSION["giris"]=sha1(md5("var"));

echo "<script>window.location.href='anasayfa.php';</script>";


}else{

 echo "<script>alert('HATALI KULLANICI BILGISI'); window.location.href='index.php' </script>";

} 


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
    <form action="" method="post" style="text-align: center; font-size:larger">
<label for="kullanici" style="font-weight:bold ;">Username:</label><br><br>
<input type="text" id="kullanici" name="kullanici" placeholder="Enter a username" required><br><br><br>
<label for="sifre" style="font-weight:bold ;">Password:</label><br><br>
<input type="password" id="sifre" name="sifre" placeholder="Enter a password" required>
<br><br><br>
<input type="submit" value="Giris Yapiniz">




    </form>
</body>
</html>