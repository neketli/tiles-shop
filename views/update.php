<?php 
$id = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];
$img = $_GET['img'];
$price = $_GET['price'];
?>

<div class="update">
	<h3 class='update__title'>Редактировать</h3>
	<form action='/scripts/update_product.php' method='post' id='update-form' class='update__content'>
		<input hidden name='id' value='<?=$id?>'>
		Title: <input type='text' placeholder='Title' name='title' value='<?=$title?>' class='update__input' required><br>
		Description: <input type='text' placeholder='Description' name='description' value='<?=$description?>' class='update__input' required><br>
		img path: <input type='text' placeholder='img' name='img' class='update__input' value='<?=$img?>' required><br>
		price: <input type='number' placeholder='price' name='price' class='update__input' value='<?=$price?>' required><br>
		<div class="update__wrapper">
			<input type='submit' value='Редактировать' name='submit' class='update__button'>
			<a type='button' value='Отмена' class='update__button' href="/admin">назад</a>
		</div>
	</form>
</div>