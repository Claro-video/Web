<?php

$server_anfitrion = "http://" . $_SERVER['SERVER_NAME'];
$id = @$_GET['id'];
$channel=@$_GET['channel'];


$canal = file($server_anfitrion. "/" . $id . "/server.fk");
$header =
"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36\r\n";
$cali = htmlspecialchars($_GET["calidad"]);

$net = "http://colivechannelshls.clarovideo.com/Content/hls_fk/Live/Channel(HBO_PLUS_HD)/Stream(05)/.m3u8";

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
$obtener6 = trim(str_replace("http://colivechannelshls.clarovideo.com/Content/hls_fk/Live/Channel","$server_anfitrion/dl/$id/",$obtener5));

$obtener7 = trim(preg_replace("/(https:\/\/)(.*)(t)(.*)(dat)/","$server_anfitrion/urlkeytime.php?time=1&tipo=k&urlkey=$id",$obtener6));



echo $obtener7;
} else {
$canal2 = $server_anfitrion . "/hls-fk.php?id=" . $id;
$obtener3 = file_get_contents($canal2);
echo $obtener7;
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
 
