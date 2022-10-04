<div class="detail">
	<div class="detail__image">
		<img src="../assets/tiles/<?= $product['img'] ?>" alt="Плитка" />
	</div>
	<div class="detail__wrapper">
		<div class="detail__title"><?= $product['title'] ?> <span class="detail__price"><?= $product['price'] ?> ₽</span></div>
		<div class="detail__description">
			<?= $product['full_description'] ?>
		</div>
		<button class="detail__button button">
			<div class="button__bg"></div>
			<span>Купить</span>
		</button>
	</div>

</div>