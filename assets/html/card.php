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
    <section class="calculator">
      <div class="calculator__container container">
        <div class="calculate">
          <h2 class="calculator__section-title section__title mb-10">ОСАГО</h2>
          <div class="calculate__left">
            <div class="calculate__radio_btn-type_insurance">
              <div class="form_radio_btn">
                <input id="radio-1" type="radio" name="radio" value="1" checked>
                <label for="radio-1">Оформить</label>
              </div>

              <div style="margin: 0;" class="form_radio_btn">
                <input id="radio-2" type="radio" name="radio" value="2">
                <label for="radio-2">Продлить</label>
              </div>
            </div>
            <h3 class="calculate__vehicle__name">Транспортное средство</h3>
            <div class="calculate__details">
              <input placeholder="ФИО страхователя" type="text" class="input calculate__input-user_name">
              <div class="platee">
                <input placeholder="Госномер" type="text" class="input calculate__input-user_plate">
              </div>
              <button class="calculate__btn-confirm">Рассчитать стоимость</button>
            </div>
          </div>
          <div class="calculate__info">
            <div class="dop__uslugi">
              <h3 class="calculate__info-title">Дополнительные услуги</h3>
              <div class="ci__bl">
                <p class="ci3__text">Аварийный комиссар</p>
                <label class="checkbox-other">
                  <input type="checkbox" checked />
                  <span></span>
                </label>
              </div>
              <div class="ci__bl">
                <p class="ci3__text">Эвакуация автомобиля</p>
                <label class="checkbox-other">
                  <input type="checkbox" checked />
                  <span></span>
                </label>
              </div>
              <div class="ci__bl">
                <p class="ci3__text">Юридическая поддержка</p>
                <label class="checkbox-other">
                  <input type="checkbox" checked />
                  <span></span>
                </label>
              </div>
            </div>
            <div data-spollers data-one-spoller class="block  block_1">
              <div style="background-color: #fff; padding: 15px; margin: 0;" class="block__item">
                <button tabindex="-1" type="button" data-spoller class="block__title _active">Какие документы нужны для оформления</button>
                <div class="block__text">
                  <ol class="dropdown__list drop-list requirements__list open">
                    <li class="dropdown__item requirement">Документы на ТС</li>
                    <li class="dropdown__item requirement">Документ страхователя</li>
                    <li class="dropdown__item requirement">Документ собственника</li>
                    <li class="dropdown__item requirement">Водительское удостоверение</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faq">
      <div class="faq__container container">
        <h2 class="section__title mb-20">Полезная информация</h2>
        <div data-spollers data-one-spoller class="block  block_1">
          <div class="block__item">
            <button tabindex="-1" type="button" data-spoller class="block__title">Как рассчитывается стоимость полиса каско?</button>
            <div class="block__text">
              <p class="fd">Стоимость полиса каско рассчитывается на основе нескольких факторов:</p>
              <ol class="faq__item-desc">
                <li>Марка, модель и возраст автомобиля.</li>
                <li>Рыночная стоимость автомобиля.</li>
                <li>Возраст и стаж водителя.</li>
                <li>История страховых случаев.</li>
                <li>Условия эксплуатации автомобиля (например, наличие гаража).</li>
                <li>Выбор опций страхования и рисков, которые нужно покрыть.</li>
              </ol>
            </div>
          </div>
          <div class="block__item">
            <button tabindex="-1" type="button" data-spoller class="block__title">Влияет ли пробег автомобиля на стоимость полиса каско?</button>
            <div class="block__text">
              <p class="fd">Да, пробег автомобиля может влиять на стоимость полиса каско. Автомобили с высоким пробегом считаются более подверженными рискам поломок и повреждений, что увеличивает вероятность страхового случая. Поэтому могут устанавливаться более высокие тарифы для автомобилей с большим пробегом.</p>
            </div>
          </div>
          <div class="block__item">
            <button tabindex="-1" type="button" data-spoller class="block__title">Влияет ли возраст водителя на стоимость полиса каско?</button>
            <div class="block__text">
              <p class="fd">Да. Молодые водители (до 25 лет) и водители старше 65 лет считаются более рисковыми группами, что может привести к повышению страховой премии. Опыт и стаж вождения также играют роль: чем больше стаж, тем ниже может быть стоимость полиса.</p>
              </ol>
            </div>
          </div>
          <div class="block__item">
            <button tabindex="-1" type="button" data-spoller class="block__title">Влияет ли количество водителей на стоимость полиса каско?</button>
            <div class="block__text">
              <p class="fd">Это зависит от наполнения полиса каско. Для «полного» каско не влияет, а если риски каско урезаны - влияет.</p>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="docs">
      <div class="docs__container container">
        <h2 class="section__title mb-10">Документы</h2>
        <ul class="docs__list">
          <li class="doc"><a class="doc__link" href="assets/images/card/nomer.svg" download>Правила обязательного страхования</a>
          </li>
          <li class="doc"><a class="doc__link" href="assets/css/style.css" download>Заявление погашения</a>
          </li>
          <li class="doc"><a class="doc__link" href="assets/css/style.css" download>Лицензии компании</a>
          </li>
          <li class="doc"><a class="doc__link" href="assets/css/style.css" download>Бланк извещения о ДТП</a>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <script src="assets/js/main.js"></script>
</body>

</html>