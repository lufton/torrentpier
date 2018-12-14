<?php
function upload($file, $size) {
	$ch = curl_init();
	$data = array(
		'Filedata' => $file,
		'prew' => $size?$size:160
	);
	curl_setopt($ch, CURLOPT_URL, 'https://imageban.ru/up');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $size?$result->files[0]->thumbs:$result->files[0]->link;
}