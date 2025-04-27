<div class="panel">
    <div class="panel__container container">

        <div class="panel__tabs tabs__btns">
            <button class="tab__btn active">Редактирование</button>
            <button class="tab__btn">Создание</button>
            <button class="tab__btn">Удаление</button>
        </div>

        <div class="tab__slides">
            <div class="tab__slide active edit">
                <div class="edit__srvc">
                    <ul class="srvc-list">
                        <li class="srvc">
                            <p class="srvs-title">ОСАГО</p>
                        </li>
                    </ul>
                </div>
                <form class="srvc__details">
                    <input type="text" placeholder="Введите название" name="srvc__title" class="srvc__title  srvcinp">
                    <textarea name="srvc__desc" class="srvcinp srvc__desc" placeholder="Введите описание"></textarea>
                    <div class="srvc__bottom">
                        <button class="srvc__btn-add_img btn-primary"><img src="assets/images/panel/addimg.svg" style="width: 15px;" alt=""> Добавить картинку</button>
                        <button class="srvc__btn-submit btn-primary">Применить →</button>
                    </div>
                </form>
            </div>

            <div class="add tab__slide">
                <form class="srvc__details">
                    <input type="text" placeholder="Введите название" name="srvc__title" class="srvc__title  srvcinp">
                    <textarea name="srvc__desc" class="srvcinp srvc__desc" placeholder="Введите описание"></textarea>
                    <div class="srvc__bottom">
                        <button class="srvc__btn-add_img btn-primary"><img src="assets/images/panel/addimg.svg" style="width: 15px;" alt=""> Добавить картинку</button>
                        <button class="srvc__btn-submit btn-primary">Применить →</button>
                    </div>
                </form>
            </div>

            <div class="delete tab__slide">
                <ul class="srvc__list delete-list">
                    <li class="srvc">
                        <p class="srvs-title">ОСАГО</p>
                    </li>
                    <li class="srvc">
                        <p class="srvs-title">ОСАГО</p>
                    </li>
                    <li class="srvc">
                        <p class="srvs-title">ОСАГО</p>
                    </li>
                    <li class="srvc">
                        <p class="srvs-title">ОСАГО</p>
                    </li>
                    <li class="srvc">
                        <p class="srvs-title">ОСАГО</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>