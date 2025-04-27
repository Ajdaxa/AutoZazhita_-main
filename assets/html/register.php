<?php
include 'assets/database/connect.php';
if (isset($_SESSION['user_id'])) {
    header('Location: ./');
}

$flag = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
}
?>
<div class="modal__window">
    <div class="modal-signup">
        <a style="margin: 0 auto; margin-bottom: 20px;" href="./"><img style="width:100px;" src=" assets/images/components/logo.svg" alt=""></a>
        <h2 style="margin: 0 auto;" class="modal__login-title">Регистрация</h2>
        <form method="post" class="modal__signup-form">
            <div class="modal-form-input auname">
                <input type="text" name="username" placeholder="Имя*" class="input inpsig">
                <?php
                if (isset($_POST['username'])) {
                    if (empty($username)) {
                        echo 'Имя не введено';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <div class="modal-form-input ausurname">
                <input type="text" name="surname" placeholder="Фамилия*" class="input inpsig">
                <?php
                if (isset($_POST['surname'])) {
                    if (empty($surname)) {
                        echo 'Введите фамилию';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <div class="modal-form-input aemail">
                <input name="email" type="email" placeholder="Почта*" class="modal__login-email input inpsig" />
                <?php
                if (isset($_POST['email'])) {
                    if (empty($email)) {
                        echo 'введите почту';
                        $flag = false;
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo 'почта не валидна';
                        $flag = false;
                    } else {
                        $issetEmail = $database->query("SELECT * FROM users WHERE email = '$email' ")->fetch();
                        if (!empty($issetEmail)) {
                            $flag = false;
                            echo 'Пользователь с этой почтой уже существует';
                        }
                    }
                }
                ?>
            </div>
            <div class="modal-form-input ipp">
                <input name="password" type="password" placeholder="Пароль*" class="modal__login-password input inpsig" />
                <?php
                if (isset($_POST['password'])) {
                    if (empty($password)) {
                        echo 'введите пароль';
                        $flag = false;
                    } elseif (strlen($password) < 6) {
                        $flag = false;
                        echo 'Введите более 6 символов';
                    }
                }
                ?>
            </div>
            <div class="modal-form-input arpas">
                <input name="re_password" type="password" placeholder="Пароль*" class="modal__login-re_password input inpsig" />
                <?php
                if (isset($_POST['repassword'])) {
                    if (empty($repassword)) {
                        echo 'повторите пароль';
                        $flag = false;
                    } elseif ($password != $repassword) {
                        echo 'пароли не совпадают';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <button type="submit" class="btn modal__btn-submit">Зарегистрироваться →</button>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($flag) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (username, surname, email, password) VALUES ('$username', '$surname', '$email', '$password')";
                    $database->query($sql);
                    echo '<script>document.location.href="index.php"</script>';
                }
            }
            ?>
        </form>
        <div class="modal__login-form-item">
            <!-- <button class="login__btn-esia">
                <img src="assets/images/components/esia.svg" alt="госуслуги" />Госуслуги
            </button> -->
            <a style="color: #1924b1;" href=" ./?page=login" class="login__btn-toLogin auth">Войти</a>
        </div>
    </div>
</div>

