<?
$id = @$_GET['id'];
$numbanners = 4; //numero de banners que se rotarán
$random = rand(1,$numbanners);
$url = array();
 
$url[1] = "http://claro.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[2] = "http://claro2.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[3] = "http://claro3.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[4] = "http://claro4.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[5] = "http://claro5.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[6] = "http://claro6.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[7] = "http://claro7.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[8] = "http://claro8.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";

$url[9] = "http://claro9.pi-dns.tk/C1a4o/" . $id . "/index.m3u8";



 
$canal2 = $url[$random];
$obtener3 = file_get_contents($canal2);
echo $obtener3;
header("Content-type: application/vnd.apple.mpegurl");
header("Content-Disposition: attachment; filename=$id.m3u8");

?>
