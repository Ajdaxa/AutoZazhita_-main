<?php
include 'assets/database/connect.php';
?>
<header>
	<div class="header__container container">
		<div class="header__logo">
			<a href="./" class="header__logo-link">
				<img src="../assets/images/components/logo.svg" alt="лого" />
			</a>
		</div>
		<nav class="nav header__nav">
			<ul class="header__nav-list list">
				<li style="position: relative" class="header__nav-item">
					<input type="text" placeholder="Поиск" class="header__search" />
					<button
						type="submit"
						style="position: absolute; left: 10px; top: 25%"
						class="header__search-btn">
						<img
							src="../assets/images/components/search-icon.svg"
							alt="поиск" />
					</button>
				</li>
				<li class="header__nav-item">
					<a href="./" class="header__nav-link nav__link">Главная</a>
				</li>
				<li class="header__nav-item">
					<a href="./?page=catalog" class="header__nav-link nav__link">Каталог</a>
				</li>
				<li class="header__nav-item">
					<a href="./?page=profile" class="header__nav-link nav__link">Профиль</a>
				</li>
				<li onclick="scrollToBlock('_services')" class="header__nav-item">
					<a class="header__nav-link nav__link">Сервисы</a>
				</li>
			</ul>
		</nav>
		<div class="header__actions">
			<a onclick="scrollToBlock('_support')" href=" #" style="display:flex; align-items: center; gap: 5px;" class="header__actions-btn btn-support">
				<svg
					class="btn-support-icon"
					width="15"
					height="15"
					viewBox="0 0 15 15"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M7.71295 0.146866C3.84288 0.146866 0.746826 3.24292 0.746826 7.11299V12.5311C0.746826 13.1469 0.991469 13.7376 1.42694 14.173C1.8624 14.6085 2.45302 14.8531 3.06887 14.8531H5.39091V8.66102H2.29485V7.11299C2.29485 5.67602 2.86569 4.29791 3.88178 3.28182C4.89787 2.26573 6.27598 1.69489 7.71295 1.69489C9.14992 1.69489 10.528 2.26573 11.5441 3.28182C12.5602 4.29791 13.1311 5.67602 13.1311 7.11299V8.66102H10.035V14.8531H12.357C12.9729 14.8531 13.5635 14.6085 13.999 14.173C14.4344 13.7376 14.6791 13.1469 14.6791 12.5311V7.11299C14.6791 3.24292 11.5598 0.146866 7.71295 0.146866Z"
						fill="#262626" />
				</svg>
				<p class="ha">Поддержка</p>
			</a>
			<a style="color: #FF3B30; display:flex; align-items: center; gap: 5px;" href="./?page=card" class="header__actions-btn btn-insurance">
				<svg
					class="btn-insurance-icon"
					width="9"
					height="15"
					viewBox="0 0 9 15"
					fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M3.53644 9.54545H0.219238L4.86332 0V5.45455H8.18053L3.53644 15V9.54545Z"
						fill="#FF3B30" />
				</svg>
				<p class="ha had"">Страховой случай</p>
			</a>
			<?php
			if (isset($_SESSION['user_id'])) { ?>
				<a href=" ./?page=register" class="header__actions-btn btn-login">
					<p class="ha"><?= $USER['username'] ?></p>
					<img
						src="../assets/images/components/login-icon.svg"
						alt="логин"
						class="login-icon" />
			</a>
		<? } else { ?>
			<a href="./?page=register" class="header__actions-btn btn-login">
				<p class="ha">Гость</p>
				<img
					src="../assets/images/components/login-icon.svg"
					alt="логин"
					class="login-icon" />
			</a>
		<? }
		?>
		<?php if ($USER['role'] === 'admin'): ?>
			<a class="border_bottom" href="./?page=panel">Админ панель</a>
		<?php endif; ?>
		<a class="exit" href="?exit">Выйти</a>
	</div>
	<div class="burger">
		<span></span>
	</div>
</div>
</header>
<!-- <a href="./?page=register" class="header__actions-btn btn-login">
	<p class="ha">Гость</p>
	<img
		src="../assets/images/components/login-icon.svg"
		alt="логин"
		class="login-icon" />
</a> -->