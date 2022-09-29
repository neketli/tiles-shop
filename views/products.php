<div class="products">
	<?php
	foreach ($products as $item) : ?>
		<?= template('./components/card.php', ['item' => $item]); ?>
	<?php endforeach; ?>
</div>