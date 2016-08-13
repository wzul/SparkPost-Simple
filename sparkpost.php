<?php
$header = array('User-Agent: api-sparkpost');
$huhu = array('content'=> array('from'=>'cuba@sparkpost.com','subject' => 'ada gerimis', 
'text'=>'Untung ler grimace','headers'=>$header), 'recipients' => array(array('address'=>"test@gmail.com")));
$ha= json_encode($huhu);
$endpoint = 'https://api.sparkpost.com/api/v1/transmissions';


	$process = curl_init($endpoint);
	curl_setopt($process, CURLOPT_HTTPHEADER, $header); 
	curl_setopt($process, CURLOPT_HEADER, 1);
	curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($process, CURLOPT_USERPWD, '1e9581425bd776dea2a8ed6322d899fb459219c7'.':');
	curl_setopt($process, CURLOPT_TIMEOUT, 30);
	curl_setopt($process, CURLOPT_POST, 1);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($process, CURLOPT_POSTFIELDS, json_encode($huhu));
	$return = curl_exec($process);
    curl_close($process);
    $arr = json_decode($return, true);
	echo "<pre>".print_r($return, true)."</pre>";