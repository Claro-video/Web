<?php 
$server_anfitrion = "http://" . $_SERVER['SERVER_NAME'];
$id = @$_GET['id'];
$url= @$_GET['url'];
$exp=$_GET['exp'];
$hmac=$_GET['hmac'];


if($id == 'ESPN_2_HD'){
$canal2 = $server_anfitrion . "/m3u8.02.php?" . $url . "&exp=". $exp ."&hmac=" . $hmac;
    $fp=fopen("$canal2", "r");
    fpassthru($fp);

echo $obtener3;
   }else{
if($id == 'ESPN_3_HD'){
$canal2 = $server_anfitrion . "/m3u8.02.php?" . $url . "&exp=". $exp ."&hmac=" . $hmac;
    $fp=fopen("$canal2", "r");
    fpassthru($fp);
   }else{
if($id == 'ESTRELLAS_HD'){
$canal2 = $server_anfitrion . "/m3u8.02.php?" . $url . "&exp=". $exp ."&hmac=" . $hmac;
    $fp=fopen("$canal2", "r");
    fpassthru($fp);
   }else{
$canal2 = $server_anfitrion . "/m3u8.01.php?" . $url . "&exp=". $exp ."&hmac=" . $hmac;
    $fp=fopen("$canal2", "r");
    fpassthru($fp);   

   }
   }
   }


     ?>
