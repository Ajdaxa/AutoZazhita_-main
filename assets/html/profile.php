<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>АвтоЗащита</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/components/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <section class="profile">
            <div class="profile__container container">
                <h2 class="section__title">Данные</h2>
                <ul class="profile__info">
                    <li class="profile__info-img"><img src="assets/images/profile/user-img.svg" alt="" class="profile__img"></li>
                    <li class="pit profile__info-name">
                        <p class="profile__info-label">ФИО:</p>
                        <p class="profile__info-value">Ололоев Оололо Ололоевич</p>
                    </li>
                    <li class="pit profile__info-birthday">
                        <p class="profile__info-label">Дата рождения:</p>
                        <p class="profile__info-value">01.01.1001</p>
                    </li>
                    <li class="pit profile__info-phone">
                        <p class="profile__info-label">Телефон</p>
                        <p class="profile__info-value">7 (911) 111-11-11</p>
                    </li>
                    <li class="pit profile__info-email">
                        <p class="profile__info-label">Email:</p>
                        <p class="profile__info-value">o.ololo@mail.ru</p>
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
                            <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626"/>
                            </svg>
                        </button>
                    </li>
                    <li class="pp-item profile__policy-status">
                        Статус оформления
                        <button class="policies__btn-more">
                            <svg class="policies__icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626"/>
                            </svg>
                        </button>
                    </li>
                    <li class="pp-item profile__policy-expired">
                        Архивные полисы
                        <button class="policies__btn-more">
                            <svg class="policies__icon" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="aass" d="M5.4517 8L4.94886 7.50142L7.91477 4.53977H0.5V3.82386H7.91477L4.94886 0.862216L5.4517 0.363636L9.26989 4.18182L5.4517 8Z" fill="#262626"/>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>