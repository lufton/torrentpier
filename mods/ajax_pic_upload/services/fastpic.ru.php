<?php
function upload($file, $size) {
	$ch = curl_init();
	$data = array(
		'file[]' => $file,
		'check_orig_resize' => !!$size,
		'orig_resize' => $size,
		'uploading' => '1'
	);
	curl_setopt($ch, CURLOPT_URL, 'https://fastpic.ru/uploadmulti');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_NOBODY, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$result = curl_exec($ch);
	preg_match('/http.*html/', $result, $matches);
	curl_setopt($ch, CURLOPT_URL, $matches[0]);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_NOBODY, 0);
	$result = curl_exec($ch);
	preg_match('/(https?.*?fastpic.ru\/big.*?)"/', $result, $matches);
	curl_close($ch);
	return $matches[1];
}