<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../styles/style.css" />
	<title>Плитка и точка</title>
</head>

<body>
	<div id="app">

		<!-- Header -->
		<header class="header">
			<a class="header__logo" href="/">
				<img src="../assets/logo.svg" alt="Плитка и точка" />
			</a>
		</header>
		<!-- Content -->
		<section class="main">
			<div class="main__sidebar">
				<!-- Sidebar -->
				<div class="sidebar">
					<div class="sidebar__item">
						<a href="/" class="sidebar__item-value">
							<img class="sidebar__item-icon" src="../assets/icons/store.svg" />

							<span>Главная</span>
						</a>

						<div class="sidebar__item-subtabs">
							<a href="?type=ceramic" class="sidebar__item-subtab">Керамика</a>
							<a href="?type=ceramogranit" class="sidebar__item-subtab">Керамогранит</a>
							<a href="?type=cement" class="sidebar__item-subtab">Цементная</a>
						</div>
					</div>

					<div class="sidebar__item">
						<a href="/pages/about" class="sidebar__item-value">
							<img class="sidebar__item-icon" src="../assets/icons/person.svg" />

							<span>Об авторе</span>
						</a>
					</div>

					<div class="sidebar__item">
						<a href="/pages/firm" class="sidebar__item-value">
							<img class="sidebar__item-icon" src="../assets/icons/company.svg" />

							<span>О фирме</span>
						</a>
					</div>
				</div>
			</div>
			<div class="main__content">
				<?= $content ?>
			</div>
		</section>
		<!-- Footer -->
		<footer class="footer">
			<div class="footer__content">
				<p class="footer__text">© 2022 “Плитка и точка”</p>
				<a class="footer__text" href="mailto:email@email.com"><span>email@email.com</span></a>
			</div>
		</footer>
	</div>
</body>

</html>