<?php require("ID.php"); ?>
<?php
date_default_timezone_set('America/Bogota');

$canal = "https://mfwkweb-api.clarovideo.net/services/player/getmedia?api_version=v5.8&authpn=html5player&authpt=ad5565dfgsftr&format=json&region=colombia&device_id=b9ae0d792d48a01f1ee0771e53a5f0df&device_category=web&device_model=html5&device_type=html5&device_so=Firefox&device_manufacturer=windows&HKS=(fdbdd5f4bece461330e2f3c8c5b78051)&preview=0&css=0&device_name=Firefox&crDomain=https://www.clarovideo.com&group_id=" . $alfin . "&stream_type=" . $tipo . ;

$tipo = @$_GET['tipo'];


$header =
"User-Agent: AndroidDlaApk AndroidDlaApkAccedo\r\n";
$obtener = get_data_homs($canal , $header);
echo $obtener;




$server = json_decode($obtener,TRUE);
$server2 = $server['response']['media']['video_url'];
$obtener2 = get_data_homs($server2 , $header);
//header("Content-type: application/vnd.apple.mpegurl");
//header("Content-Disposition: attachment; filename=playlist.m3u8");
echo $obtener2;

$file = fopen($id_solicitado . "/server.fk", "w");
fputs($file,$obtener2);
fclose($file);


function get_data_homs($url, $data){
$options = array(
'http'=>array(
'method'=>"GET",
'header'=> $data));
$context = stream_context_create($options);
$file = file_get_contents($url, false, $context);
return $file;
}


