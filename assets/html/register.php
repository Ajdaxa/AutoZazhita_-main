<?php
include 'assets/database/connect.php';
$flag = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
}
?>
<div class="modal__window">
    <div class="modal-signup">
        <a style="margin: 0 auto; margin-bottom: 20px;" href="./"><img style="width:100px;" src=" assets/images/components/logo.svg" alt=""></a>
        <h2 style="margin: 0 auto;" class="modal__login-title">Регистрация</h2>
        <form method="post" class="modal__signup-form">
            <div class="modal-form-input aemail">
                <input
                    name="email"
                    type="email"
                    placeholder="Email"
                    class="modal__login-email input inpsig" />
                <?
                if (isset($_POST['email'])) {
                    if (empty($email)) {
                        echo 'Почта пусто';
                        $flag = false;
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo 'Email не валиден';
                        $flag = false;
                    } else {
                        $issetEmail = $database->query("SELECT * FROM users WHERE email ='$email' ")->fetch();
                        if ($issetEmail) {
                            echo 'Email уже занят';
                        }
                    }
                }
                ?>
            </div>
            <div class="modal-form-input iph">
                <input
                    name="phone"
                    type="text"
                    placeholder="Номер телефона"
                    class="modal__login-phone input inpsig" />
                <?
                if (isset($_POST['phone'])) {
                    if (empty($phone)) {
                        echo 'Телефон пусто';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <div class="modal-form-input ipp">
                <input
                    name="password"
                    type="password"
                    placeholder="Пароль"
                    class="modal__login-password input inpsig" />
                <?
                if (isset($_POST['$password'])) {
                    if (empty($password)) {
                        echo 'Пароль пусто';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <div class="modal-form-input arpas">
                <input
                    name="re_password"
                    type="password"
                    placeholder="Пароль"
                    class="modal__login-re_password input inpsig" />
                <?
                if (isset($_POST['re_password'])) {
                    if (empty($re_password)) {
                        echo 'Подтверждение пароля пусто';
                        $flag = false;
                    } elseif ($password !== $re_password) {
                        echo 'пароли не совпадают';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <?
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($flag) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (email, password, phone) VALUE ('$email', '$password', '$phone')";
                    $stmt = $database->query($sql);
                    header('Location: ./');
                }
            }
            ?>
            <button type="submit" class="btn modal__btn-submit">Регистрация →</button>
        </form>
        <div class="modal__login-form-item">
            <button class="login__btn-esia">
                <img src="assets/images/components/esia.svg" alt="госуслуги" />Госуслуги
            </button>
            <a style="color: #1924b1;" href=" ./?page=login" class="login__btn-toLogin auth">Войти</a>
        </div>
    </div>
</div>