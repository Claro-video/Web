<?php

$server_anfitrion = "https://" . $_SERVER['SERVER_NAME'];
$id = @$_GET['id'];
$channel=@$_GET['channel'];
$server_ip = $_SERVER['SERVER_ADDR'];
      $d=rand(52,52);
      $d2=rand(84,95);
      $d3=rand(0,255);
      $d4=rand(0,255);


$canal = file($server_anfitrion. "/" . $id . "/server.kr");
$header =
"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36\r\n";
$cali = htmlspecialchars($_GET["calidad"]);

$net = "http://colivechannelshls.clarovideo.com/Content/hls_kr/Live/Channel(HBO_PLUS_HD)/Stream(05)/.m3u8";

if ($cali == "5") {
$a = rtrim($canal[10]);
}elseif ($cali == "4") {
$a = rtrim($canal[8]);
}elseif ($cali == "3") {
$a = rtrim($canal[6]);
}elseif ($cali == "6") {
$a = rtrim($canal[12]);
}

$obtener2 = get_data_homs($a , $header);
if (strpos($obtener2,'EXTM3U') == !false) {
header("Content-type: application/vnd.apple.mpegurl");
header("Content-Disposition: attachment; filename=$id.m3u8");
$obtener4 = trim(str_replace("http://mxliveclarovideo.akamaized.net","http://colivechannelshls.clarovideo.com",$obtener2));
$obtener5 = trim(str_replace("http://latamliveclarovideo.akamaized.net","http://colivechannelshls.clarovideo.com",$obtener4));
$obtener6 = trim(str_replace("http://colivechannelshls.clarovideo.com/Content/hls_kr/Live/Channel","$server_anfitrion/dl.php?id=$id&url=",$obtener5));
 
$obtener7 = trim(preg_replace("/(https:\/\/)(.*)(time\/1\/t)(.*)(dat)/","$server_anfitrion/urlkeytime.php?time=1&urlkey=$id",$obtener6));
$obtener8 = trim(preg_replace("/(https:\/\/)(.*)(time\/2\/t)(.*)(dat)/","$server_anfitrion/urlkeytime.php?time=2&urlkey=$id",$obtener7));
$obtener9 = trim(preg_replace("/(https:\/\/)(.*)(time\/3\/t)(.*)(dat)/","$server_anfitrion/urlkeytime.php?time=3&urlkey=$id",$obtener8));


$obtener10 = trim(preg_replace("/(ip=.*)(&exp)/","ip=$d.$d2.$d3.$d4&exp",$obtener9));

echo $obtener10;
} else {
$canal2 = $server_anfitrion . "/hls-kr.php?id=" . $id;
$obtener3 = file_get_contents($canal2);
echo $obtener10;
}


function get_data_homs($url, $data){
$options = array(
'http'=>array(
'method'=>"GET",
'header'=> $data));
$context = stream_context_create($options);
$file = file_get_contents($url, false, $context);
return $file;
}






?>
 
