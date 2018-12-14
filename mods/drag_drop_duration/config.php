<?php
$bb_cfg = array_merge($bb_cfg, [
	basename(__DIR__) => [
		'duration' => [ // id поля, можно переопределять уже имеющиеся INP[]
			'title' => 'Продолжительность', // заголовок поля
			'attr1' => '8,8', // аттрибуты поля
			'attr2' => 'req', // настройки отображения поля: req,BR,HEAD и т.д.
			'format' => 'H:i:s', // формат отображения продолжительности (http://php.net/manual/ru/function.date.php)
			'recursive' => true, // сканировать папки рекурсивно
			'regex' => '\\\.(mp3|wav|ogg|aac)$', // regex для фильтрации лишних файлов, false – все файлы
			'filelist' => 'tracklist' // id поля файллиста или false
		]
	]
]);
