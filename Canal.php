<?php 
$server_anfitrion = "http://" . $_SERVER['SERVER_NAME'];
$id = @$_GET['id'];
header("Content-type: application/vnd.apple.mpegurl");
header("Content-Disposition: attachment; filename=$id.m3u8");


if($id == 'ESPN_2_HD'){
$canal2 = $server_anfitrion . "/02/" . $id . "/4.m3u8";
$obtener3 = file_get_contents($canal2);
echo $obtener3;
   }else{
if($id == 'ESPN_3_HD'){
$canal2 = $server_anfitrion . "/02/" . $id . "/4.m3u8";
$obtener3 = file_get_contents($canal2);
echo $obtener3;
   }else{
if($id == 'ESTRELLAS_HD'){
$canal2 = $server_anfitrion . "/02/" . $id . "/4.m3u8";
$obtener3 = file_get_contents($canal2);
echo $obtener3;
   }else{
$canal2 = $server_anfitrion . "/01/" . $id . "/4.m3u8";
$obtener3 = file_get_contents($canal2);
echo $obtener3;
   }
   }
   }


     ?>
