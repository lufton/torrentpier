<?php
$bb_cfg = array_merge($bb_cfg, [
	basename(__DIR__) => [
		'genre' => [ // id поля, можно переопределять уже имеющиеся TXT[]
			'title' => 'Жанр', // заголовок поля
			'attr1' => '200,80', // аттрибуты поля
			'attr2' => 'req', // настройки отображения поля: req,BR,HEAD и т.д.
			'multiple' => true, // множественный выбор
			// варианты выбора
			'options' => ['Pop', 'Hip-Hop', 'Rock', 'R&B', 'Jazz', 'Latin', 'Metal', 'Electronica', 'Classical', 'World'],
		],
		'artist' => [
			'title' => 'Исполнитель',
			'attr1' => '200,80',
			'attr2' => 'HEAD,headonly,req',
			'multiple' => false,
			'options' => ['The Beatles', 'The Rolling Stones', 'Led Zeppelin', 'Pink Floyd', 'U2', 'Nirvana', 'Deep Purple', 'AC/DC', 'Eagles', 'Black Sabbath'],
		],
	]
]);
