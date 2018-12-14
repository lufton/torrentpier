<?php
function upload($file, $size) {
	$ch = curl_init();
	$data = array(
		'File' => $file,
		'OriginalFileName' => 'blank.jpg',
		'MaxSize' => $size,
		'PrevMaxSize' => 360,
		'IsPublic' => 'false',
		'NeedResize' => $size?'true':'false'
	);
	curl_setopt($ch, CURLOPT_URL, 'https://radikal.ru/Img/SaveImg2');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $result->Url;
}