 <?php
$server_anfitrion = "http://" . $_SERVER['SERVER_NAME'];
error_reporting(0);
$url='http://167.114.144.20/stb/gateway.php?cmd=get_timestamp&id=123&type=livetv&gmt=-5';
$cont = live($url);
$xy = explode('http://',$cont);
$xy = explode('/live',$xy[1]);
$base=$xy[0];
$xy2 = explode('live/',$cont);
$xy2 = explode('/',$xy2[1]);
$user=$xy2[0];
$pass=$xy2[1];
$m3u=$m3u='http://'.$base.'/get.php?username='.$user.'&password='.$pass.'&type='.$_GET['m3u'].'&output=hls';
$url2='http://'.$base.'/live/'.$user.'/'.$pass.'/'.$_GET['id'].'.m3u8';
$url3='http://'.$base.'/live/'.$user.'/'.$pass.'/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,'null');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'user-agent: 1G6kvSH8o0roEUmzsh2esOu3wMxG01kONFzXW0RN'
));
$response = curl_exec($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headers = substr($response, 0, $header_size);
curl_close($ch);
header("Content-Type:text/html; charset=UTF-8");
$xy = explode('Location: ',$headers);
$xy = explode(' ',$xy[1]);
$base=$xy[0];
if (isset($_GET['m3u'])) {
$c=file_get_contents($m3u);
$c=str_replace($url3, $server_anfitrion . "/master.php?id=",$c);
$c=str_replace('.m3u8','&f=.m3u8',$c);
header("Content-Type: text/plain");
echo $c;
} else {
header('Location:'.$base);
}
function live($url)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_ENCODING, 'gz');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Connection: keep-alive',
'Pragma: no-cache',
'Cache-Control: no-cache',
'Fsvs-AppToken: d212ba2d5bdae70b0c961101fbfc91f7',
'Fsvs-ServiceName: SkyTv',
'Fsvs-DeviceType: android',
'Fsvs-DeviceMAC: 32:72:B4:88:E5:C3',
'Fsvs-LinkToken: 3cbc35ce3a950cf89c7e48c3fd9f81bc',
'User-Agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-N960U Build/LMY48Z) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/39.0.0.0 Mobile Safari/537.36 vsaClient/EtvPlus/2.0.1',
'Fsvs-DeviceId: EB95-419A-B984',
'Fsvs-ClientVersion: 2.0',
'Fsvs-Challenge: 190e4a0c10e971e372292bad0800221f',
'Fsvs-Signature: c61229e899845cb74c52cf61fe0b1122',
'Fsvs-Language: es',
'Fsvs-LinkUsername: D-KG3Z'


));
$so=curl_exec($ch);
curl_close($ch);
return $so;
} 
