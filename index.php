<!-- Пишем в соответствии со стандартом HTML5 -->
<!DOCTYPE HTML>
<html>
<head>
	<!-- Пишем заголовок документа -->
	<title>Динамические списки</title>
	<script src="http://yandex.st/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script src="my.script.js"></script>

</head>
<body>
	<!-- Форма для динамических списков -->
	<form action="" method="post" id="dynamic_selects">
		<!-- Создаем заголовок для списка выбора типов транспорта -->
		<!-- Поле формы помещаем в контейнер с классом row -->
		<div class="row">
			<label for="type">Тип транспорта:</label>
			<!-- Создаем поле со списком -->
			<select id="type">
				<!-- В список сразу внесем значение по умолчанию, а также
					несколько значений видов транспорта. Предположим, что они
					нам известны заранее, и хранятся, допустим, в базе данных -->
				<option value="0">Выберите из списка</option>
				<option value="1">Наземный транспорт</option>
				<option value="2">Водный транспорт</option>
				<option value="3">Воздушный транспорт</option>
			</select>
		</div>
		<!-- Для списков видов и категорий транспорта мы создадим только значения по умолчанию, 
			остальные значения мы будем подгружать в них тогда, когда будет сделан выбор
			в первом списке -->
		<div class="row">
			<label for="kind">Вид транспорта:</label>
			<!-- Так как это список зависит от выбора в первом списке, отключаем его, добавив
				к тегу select атрибут disabled-->
			<select id="kind" disabled>
				<option value="0">Выберите из списка</option>
			</select>
		</div>
		<div class="row">
			<label for="category">Категория транспорта:</label>
			<!-- Так как это список зависит от выбора во втором списке, отключаем его, добавив
				к тегу select атрибут disabled-->
			<select id="category" disabled>
				<option value="0">Выберите из списка</option>
			</select>
		</div>
	</form>
</body>
</html>