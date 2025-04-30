<?php
include 'assets/database/connect.php';

// Получение данных из формы
$category = $_GET['category_id'] ?? '';
$search = $_GET['search'] ?? '';
$action = $_GET['action'] ?? '';
$product_id = $_GET['id'] ?? null;

// Обработка действий CRUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category_id = $_POST['category_id'] ?? null;

    // Добавление нового продукта
    if ($action === 'create') {
        if (!empty($title) && !empty($description) && !empty($price)) {
            $sql = "INSERT INTO products (title, description,  category_id) VALUES (?, ?, ?)";
            $stmt = $database->prepare($sql);
            $stmt->execute([$title, $description, $category_id]);
            header('Location: ./?page=catalog');
            exit;
        }
    }

    // Обновление продукта
    if ($action === 'update' && $product_id) {
        $sql = "UPDATE products SET title = ?, description = ?, category_id = ? WHERE id = ?";
        $stmt = $database->prepare($sql);
        $stmt->execute([$title, $description,  $category_id, $product_id]);
        header('Location: ./');
        exit;
    }
}

// Удаление продукта
if ($action === 'delete' && $product_id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $database->prepare($sql);
    $stmt->execute([$product_id]);
    header('Location: ./?page=catalog');
    exit;
}

// Чтение продуктов
$sql = 'SELECT * FROM products WHERE 1=1';
if (!empty($search)) {
    $sql .= " AND title LIKE '%$search%'";
}
if (!empty($category)) {
    $sql .= " AND category_id = $category";
}
$stmt = $database->query($sql);
$products = $stmt->fetchAll();

// Получение категорий
$sql2 = "SELECT * FROM categories";
$categories = $database->query($sql2)->fetchAll();
?>

<section id="_catalog" class="catalog">
    <div class="catalog__container container">
        <ul class="catalog__list catalog-grid">
            <?php foreach ($products as $product): ?>
                <li class="catalog__item">
                    <article class="catalog__card">
                        <div class="card__top">
                            <h4 class="card__title"><?= htmlspecialchars($product['title']) ?></h4>
                            <a href="./?page=catalog&action=update&id=<?= $product['id'] ?>" class="card__btn-more">Редактировать</a>
                            <a href="./?page=catalog&action=delete&id=<?= $product['id'] ?>" class="card__btn-more" onclick="return confirm('Вы уверены, что хотите удалить этот продукт?')">Удалить</a>
                        </div>
                        <p class="card__desc desc"><?= htmlspecialchars($product['description']) ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- Форма для добавления/редактирования -->
<?php if ($action === 'create' || ($action === 'update' && $product_id)): ?>
    <?php
    $product = null;
    if ($action === 'update' && $product_id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $database->prepare($sql);
        $stmt->execute([$product_id]);
        $product = $stmt->fetch();
    }
    ?>
    <section class="form-section">
        <div class="container">
            <form method="POST" action="./?page=catalog&action=<?= $action ?>&id=<?= $product_id ?>">
                <input type="text" name="title" placeholder="Название" value="<?= htmlspecialchars($product['title'] ?? '') ?>" required>
                <textarea name="description" placeholder="Описание" required><?= htmlspecialchars($product['description'] ?? '') ?></textarea>
                <select name="category_id" required>
                    <option value="">Выберите категорию</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>" <?= isset($product['category_id']) && $product['category_id'] == $category['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($category['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </section>
<?php endif; ?>