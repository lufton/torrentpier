<?php
$bb_cfg = array_merge($bb_cfg, [
	basename(__DIR__) => [
		'genre' => [ // id поля, можно переопределять уже имеющиеся TXT[]
			'title' => 'Жанр', // заголовок поля
			'attr1' => '200,80', // аттрибуты поля
			'attr2' => 'req', // настройки отображения поля: req,BR,HEAD и т.д.
			'multiple' => true, // множественный выбор
			'order' => false, // упорядочивать варианты
			'continue' => false, // предлагать ввести ещё значения
			// варианты выбора
			'options' => ['Worship', 'Gospel', 'Rock', 'Rap', 'Pop', 'Hip-Hop', 'R&B', 'Contemporary', 'Metal', 'Jazz', 'Latin', 'Electronica', 'Classical', 'World'],
		],
		'artist' => [
			'title' => 'Исполнитель',
			'attr1' => '200,80',
			'attr2' => 'HEAD,headonly,req',
			'multiple' => false,
			'order' => true,
			'continue' => false,
			'options' => ['Alin Timofte', 'A-SIDE', 'Credo', 'Decean', 'Gabriel Gorcea', 'Gloria', 'Hillsong Ukraine', 'Imprintband', 'Morning Star', 'Natalie Grant', 'Paul Wilbur', 'Ruben Filoti', 'Singeteam', 'Speranta', 'Third Day', 'Virginia', 'Александр Адамко', 'Александр Бейко', 'Александр Патлис', 'Александр Пономарев', 'Александр Шевченко', 'Алеся Новик', 'Алла Орлова', 'Алла Чепикова', 'Альфа', 'Альфа и Омега', 'Анастасия Ерёмина', 'Андрей Лукашин', 'Антон Ширшов', 'Артём Шаталов', 'Артём Янский', 'Аузяки', 'Белые крылья', 'Благодать', 'Блаженство', 'Божье прикосновение', 'Божья коровка', 'Вадим Дахненко', 'Вадим Ятковский', 'Валентина Утина', 'Валерий Короп', 'Валерий Погор', 'Василий Скороход', 'Василь Брона', 'Вечность', 'Виктор Клименко', 'Виктор Павлик', 'Виктория Березовская', 'Виталий Ефремочкин', 'Влад Канашин', 'Владимир Курильченко', 'Владимир Перехода', 'Возрождение', 'Габриела Мишкой', 'Геннадий Никутьев', 'Глория', 'Голгофа', 'Давир', 'Данило Мостовяк', 'Дарина Кочанжи', 'Денис Никитин', 'Добрая Весть', 'Евгений Гудухин', 'Езер Авен', 'Елена Голубева', 'Елена Ковалёва', 'Живая капля', 'Живые камни', 'Жизнь', 'Зов любви', 'Игорь Киселёв', 'Игорь Мельничук', 'Игорь Яловец', 'Исход', 'Ксения Лапицкая', 'Левит', 'Леся Бондаренко', 'Люба Зарембо', 'Людмила Вознярская', 'Людмила Пинчук', 'Мария Петрова', 'Маханаим', 'Мелхиседек', 'Милана', 'Михаил Жуков', 'Михаил Нестеров', 'Надежда Михайлова', 'Назар Масютка', 'Наталья Васильчук', 'Наталья Лансере', 'Николай Васильчук', 'Нина Бойко', 'Новая песнь', 'Новый Иерусалим', 'Обновление', 'Олег Драгой', 'Олег Коренчук', 'Ольга Заворотная', 'Оскар Сопс', 'Открытое небо', 'Отрада', 'Павел Плахотин', 'Просто сосуды', 'Псалмяры', 'Радость', 'Рассвет', 'Русавуки', 'Светлана Малова', 'Сергей Брикса', 'Сергей Демидович', 'Сергей Киселёв', 'Сергей Нагорный', 'Солнце Правды', 'Спасение', 'Странники', 'Татьяна Прохор', 'Татьяна Шилова', 'Эдем', 'Эдуард Акулов', 'Эммануил', 'Юлия Авструб', 'Юрий Табаков', 'Янис Цуркан',],
		],
	]
]);
