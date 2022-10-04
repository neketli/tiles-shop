<style>
	td {
		padding: 5px 10px;
	}
</style>
<a class="button" style="margin-bottom: 15px;" href="/views/create.php">
	<div class="button__bg"></div>
	<span>Добавить</span>
</a>
<table class="table">
	<thead class="table__header">
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Full description</th>
			<th>Img</th>
			<th>Price</th>
			<th>Type</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($products as $item) : ?>
			<tr>
				<td><?= $item['title'] ?></td>
				<td><?= $item['description'] ?></td>
				<td><?= $item['full_description'] ?></td>
				<td><?= $item['img'] ?></td>
				<td><?= $item['price'] ?></td>
				<td><?= $item['type'] ?></td>

				<td>
					<a class="button" href='/scripts/delete_product.php?
					id=<?= $item['id'] ?>'>
						<div class="button__bg"></div>
						<span>Удалить</span>
					</a>

					<a class="button" href='/views/update
					?id=<?= $item['id'] ?>
					'>
						<div class="button__bg"></div>
						<span>Редактировать</span>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>