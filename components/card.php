<div class="card">
	<div class="card__image">
		<!-- <span>200₽</span> old price -->
		<img src="<?= $item['img'] ?>" alt="Плитка" />
		<span class="card__price"><?= $item['price'] ?> ₽</span>
	</div>
	<div class="card__title"><?= $item['title'] ?></div>
	<div class="card__description">
		<?= $item['description'] ?>
	</div>
	<button class="card__button button">
		<div class="button__bg"></div>
		<span>Купить</span>
	</button>
</div>