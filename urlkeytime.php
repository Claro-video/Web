<?php 
$urlkey = @$_GET["urlkey"];
$time = @$_GET["time"];

if($urlkey == 'ESPN_2_HD'){
	$canal2 = "https://claro-video.github.io/dat/fk/" . $urlkey . ".dat";
	$fp=fopen("$canal2", "r");
	fpassthru($fp);
   }else{
if($urlkey == 'ESPN_3_HD'){
$canal2 = "https://claro-video.github.io/dat/fk/" . $urlkey . ".dat";
    $fp=fopen("$canal2", "r");
    fpassthru($fp);
   }else{
if($urlkey == 'ESTRELLAS_HD'){
	$canal2 = "https://claro-video.github.io/dat/fk/" . $urlkey . ".dat";
	$fp=fopen("$canal2", "r");
	fpassthru($fp);
   }else{
	$canal2 = "https://claro-video.github.io/dat/kr/" . $urlkey . "." . $time . ".dat";
	$fp=fopen("$canal2", "r");
	fpassthru($fp);
   }
   }
   } 


     ?>
