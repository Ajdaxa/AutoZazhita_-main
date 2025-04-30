<?php
$sql = "SELECT * FROM categories";
$result = $database->query($sql)->fetchAll();

include 'assets/database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];


    if (empty($title) || empty($description)) {
        echo "Пустые поля";
    } elseif (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['image']['tmp_name'];
        $name = basename($_FILES['image']['name']);
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid() . '.' . $extension;
        $newDirection = 'uploads/' . $newName;


        if (move_uploaded_file($tmpName, $newDirection)) {
            unlink($product['page']);
            $sql = "INSERT INTO products (title, description, image, category_id) VALUES ('$title', '$description', '$newDirection', '$category_id')";
            $stmt = $database->query($sql);
            header('Location: ./');
        } else {
            echo 'Ошибка загрузки';
        }
    } else {
        echo 'Нет изображения';
    }
}
?>
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
                <form method="post" class="srvc__details" enctype="multipart/form-data">
                    <input type="text" placeholder="Введите название" name="title" class="srvc__title  srvcinp">
                    <textarea name="description" class="srvcinp srvc__desc" placeholder="Введите описание"></textarea>
                    <select style="padding: 10px; border-radius: 15px;" name="category_id">
                        <option class="srvcinp" value="#">Выберите категорию</option>
                        <?php foreach ($result as $category): ?>
                            <option value="<?= $category['id'] ?>">
                                <?= $category['title'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="srvc__bottom">
                        <input type="file" name="image" class="srvc__btn-add_img btn-primary">
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