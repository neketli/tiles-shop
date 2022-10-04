<div class="create">
	<h3 class='create__title'>Добавить</h3>
	<form action='/scripts/create_product.php' method='post' id='create-form' class='create__content'>
		Title: <input type='text' placeholder='Title' name='title' class='create__input' required><br>
		Description: <input type='text' placeholder='Description' name='description' class='create__input' required><br>
		img path: <input type='text' placeholder='img' name='img' class='create__input' required><br>
		price: <input type='number' placeholder='price' name='price' class='create__input' required><br>
		<div class="create__wrapper">
			<input type='submit' value='Добавить' name='submit' class='create__button'>
			<a type='button' value='Отмена' class='create__button' href="/admin">назад</a>
		</div>
	</form>
</div>