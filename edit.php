<?php
echo '<a href="/">Обратно в магазин</a><br />';
echo '<a href="/admin">В админку</a><br /><br />';
// пробегаем по содержимому
$all_files = scandir('views');
// в цикле перебираем файлы
foreach ($all_files as $one_file) {
	// проверяем не директория ли
	if (!is_dir($one_file)) {
		// проверяем расширение
		if (pathinfo($one_file, PATHINFO_EXTENSION) == 'php') {
			// выполняем вывод списка
			$file_name = explode('.', $one_file); // получаем имя
			echo '<a href="?page=' . $file_name[0] . '">' . $file_name[0] . '</a><br />';
		}
	}
}

if (!empty($_GET['page'])) {
	$content = file_get_contents('views/' . $_GET['page'] . '.php');
	echo '<form method="post">
	<br>
	<textarea name="content">' . $content . '</textarea>
	<br>
	<br>
	<button type="submit" name="edit">Отправить</button>
	</form>';
}

if (isset($_POST['edit'])) {
	$cont = $_POST['content'];
	$status = file_put_contents('views/' . $_GET['page'] . '.php', $cont);
	if ($status)
		echo 'ok';
	else echo 'fail';
}
