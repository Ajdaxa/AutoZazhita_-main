<?php
include 'assets/database/connect.php';
?>
<section class="profile">
    <div class="profile__container container">
        <h2 class="section__title">Данные</h2>
        <ul class="profile__info">
            <li class="profile__info-img">
                <img style="width: 50px; height: 50px; border-radius: 50%;"
                    src="<?= !empty($USER['avatar']) ? ($USER['avatar']) : 'assets/images/profile/user-img.svg'?>"
                    alt="Фото профиля"
                    class="profile__img">
            </li>
            <li class="pit profile__info-name">
                <p class="profile__info-label">Имя:</p>
                <p class="profile__info-value"><?= $USER['username'] ?></p>
            </li>
            <li class="pit profile__info-birthday">
                <p class="profile__info-label">Дата рождения:</p>
                <p class="profile__info-value"><?= !empty($USER['birthday']) ? ($USER['birthday']) : 'Не указано' ?></p>
            </li>
            <li class="pit profile__info-phone">
                <p class="profile__info-label">Телефон</p>
                <p class="profile__info-value"><?= !empty($USER['phone']) ? ($USER['phone']) : 'Не указано' ?></p>
            </li>
            <li class="pit profile__info-email">
                <p class="profile__info-label">Email:</p>
                <p class="profile__info-value"><?= $USER['email'] ?></p>
            </li>
        </ul>
        <button class="profile__btn-edit">Редактировать данные</button>
    </div>
</section>
<section class="profile__policies">
    <div class="profile__container container">
        <h2 class="section__title mb-20">Мои полисы</h2>
        <ul class="profile__policies-list policies-grid">
            <li class="pp-item profile__policy-active">
                Мои полисы
                <button class="policies__btn-more">
                    <svg class="policies__icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626" />
                    </svg>
                </button>
            </li>
            <li class="pp-item profile__policy-status">
                Статус оформления
                <button class="policies__btn-more">
                    <svg class="policies__icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626" />
                    </svg>
                </button>
            </li>
            <li class="pp-item profile__policy-expired">
                Архивные полисы
                <button class="policies__btn-more">
                    <svg class="policies__icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626" />
                    </svg>
                </button>
            </li>
        </ul>
    </div>
</section>
<!-- </div> -->
<!-- </body>

</html> -->