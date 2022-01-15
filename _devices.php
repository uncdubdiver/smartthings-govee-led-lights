<?php
header('Access-Control-Allow-Origin: *');
$allowed_domains = [
    'http://127.0.0.1:8000'
];
	/*
	print '<div align="left"><pre>';
	print_r($_REQUEST);
	print '</pre></div>';
	die;
	//*/
	
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://developer-api.govee.com/v1/devices',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Govee-API-Key: ' . trim($_REQUEST['Govee-API-Key']),
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	
	header('Content-Type: application/json; charset=utf-8');
	print json_encode($response);
	exit;
?>
