<?php
require_once '../scripts/filters.php';
$id = $_GET['id'];
$product = get_product($id);

// $title = $_GET['title'];
// $description = $_GET['description'];
// $full_description = $_GET['full_description'];
// $img = $_GET['img'];
// $price = $_GET['price'];
// $type = $_GET['type'];
?>

<div class="update">
	<h3 class='update__title'>Редактировать</h3>
	<form action='/scripts/update_product.php' method='post' id='update-form' class='update__content'>
		<input hidden name='id' value='<?= $product['id'] ?>'>
		Title: <input type='text' placeholder='Title' name='title' value='<?= $product['title'] ?>' class='update__input' required><br>

		Description: <textarea type='text' placeholder='Description' name='description' class='update__input' required>
			<?= $product['description'] ?>
		</textarea><br>

		Full description: <textarea type='text' placeholder='Description' name='full_description' class='update__input' required>
		<?= $product['full_description'] ?>
	</textarea>
		<br>

		img path: <input type='text' placeholder='img' name='img' class='update__input' value='<?= $product['img'] ?>' required><br>
		<!-- image: <input name="img" type="file" /> <br> -->

		price: <input type='number' placeholder='price' name='price' class='update__input' value='<?= $product['price'] ?>' required><br>

		type: <input type='text' placeholder='type' name='type' class='update__input' value='<?= $product['type'] ?>' required><br>
		<div class="update__wrapper">
			<input type='submit' value='Сохранить' name='submit' class='update__button'>
			<a type='button' value='Отмена' class='update__button' href="/admin">назад</a>
		</div>
	</form>
</div>