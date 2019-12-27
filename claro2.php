 <?php

  # llamado del canal - http://localhost/claro.php?calidad=4&canal=***xx&f=.m3u8
 $canal = $_GET['canal'];
 $calidad = $_GET['calidad'];
 $url = 'https://mfwkweb-api.clarovideo.net/services/player/getmedia?api_version=v5.85&authpn=html5player&authpt=ad5565dfgsftr&device_category=web&device_model=html5&device_type=1&device_manufacturer=1&HKS=('.$calidad.')&stream_type=hls_kr&group_id='.$canal;
 $ch = file_get_contents($url);
 $data = json_decode($ch);
 $stream = $data->response->media->video_url;
 header('Location:' .$stream);
 
 ?> 
