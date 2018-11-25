<?php require("ID.php"); ?>
<?php
date_default_timezone_set('America/Bogota');

$canal = "https://mfwkmobileandroid-api.clarovideo.net/services/player/getmedia?device_manufacturer=Lenovo&region=colombia&device_category=mobile&device_type=Lenovo%20A320t&stream_type=hls&group_id=" . $alfin . "&device_id=71be677682638d54&format=json&api_version=v5.7&device_so=Android%204.4.2&device_model=android&device_name=A320t&preview=0&HKS=5encbbiojrvmqj7ma349iohnm2&authpt=12e4i8l6a581a&css=0&authpn=amco";




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


