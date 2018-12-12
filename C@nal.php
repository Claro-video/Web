<?php
$id = @$_GET['id'];

if($id == 'RCN_HD'){
$alfin = "https://rcnhd.cdn.net.co/live01/rcnhd_720p.m3u8";
$alfin2 = "https://rcnhd.cdn.net.co/live01";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo "$alfin2/".$line . "\n";
    }

}
fclose($file);

   }else{
if($id == 'RCN_HD2'){
$alfin = "https://rcnhd.cdn.net.co/live02/rcnhd2_720p.m3u8";
$alfin2 = "https://rcnhd.cdn.net.co/live02";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo "$alfin2/".$line . "\n";
    }

}
fclose($file);
   }else{
if($id == 'TACHO_PISTACHO'){
$alfin = "https://rcnhd.cdn.net.co/live03/tacho_480p.m3u8";
$alfin2 = "https://rcnhd.cdn.net.co/live03";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo "$alfin2/".$line . "\n";
    }

}
fclose($file);

   }else{
if($id == 'SENAL_COLOMBIA'){
$alfin = "http://live10ssl.cdnmedia.tv/rtvcscolombialive/smil:live.smil/.m3u8";
$alfin2 = "http://live10ssl.cdnmedia.tv/rtvcscolombialive/smil:live.smil";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo "$alfin2/".$line . "\n";
    }

}
fclose($file);
   }
else{
if($id == 'CANAL_INSTITUCIONAL'){
$alfin = "http://live10ssl.cdnmedia.tv/rtvcsinstitucionallive/smil:live2.smil/.m3u8";
$alfin2 = "http://live10ssl.cdnmedia.tv/rtvcsinstitucionallive/smil:live2.smil";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo "$alfin2/".$line . "\n";
    }

}
fclose($file);
   }
else{
if($id == 'TELECARIBE_DEPORTES'){
$alfin = "https://telecaribe-deportes.gcdn.anvato.net/hls/manifests/telecaribedeporteshd2/master.m3u8?eqp=QmYxZEZVYTkxajhtNW9xNVkwcXNsZ21zbHRudDVxN3pIRmQrUkZld0NNUm5kRDB4UEltUEUyRi8vTlpsNUFpdkMzWjkzblVEbDluZDVRcU4zY3d0UFRUV0pJeFpITXdkaWRtZkxmOFRKSUc2d29EKzhlL1VsOVl1N0U4dS9xWkpYZEp1NGVJSGZyQkdDM0RnaDZlZVZCajJjak5pRHkwdHBOTnRxRG9VeTE3Y2k3d3RqZS9Sa3E1b205Y05CaGFJdEMzNGJjRUFKYjZXRTZHcFA4NnZiTkszZTI0T0lTdXRodFo2ckZYb0lFb3BBY2xuay9mZm5jbFY4YUJLeE1CN3RkaDJGc0lFWnBOYitOTitvT1lhN2dRZFRHUGFzc0FiMi9qK1l1bW93ZGJIS1h1N1B1dU40aitQWkZPK0ZCL1V2bkdyWnZaVkJyZG9Pc3pDcHVpblhlL3ZVZFluaW50VGtEaHltRCtOTzFYMDMvaHBpZ0JXamhueUJPQk1EUTJT&anvtrid=467d0c7b2ea982b9cdac034e95d02cf0&anvauth=tb=0~te=1542480199~sgn=d544e8dcf0288fae52ffbb8d101009c3eb812356befb4b68ecefe59e3c4b0959&t=1542480109";
$file = fopen ("$alfin", "r");
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if ($line[0] == "#") {
	 echo $line .  "\n";
    } else {
        echo $line . "\n";
    }

}
fclose($file);
   }
   }
   }
   }
   }
   }
?>
