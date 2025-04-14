<?php
include("assets/database/connect.php");

$flag = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>
<div class="modal__window">
    <div class="modal-login">
        <a style="margin: 0 auto; margin-bottom: 20px;" href="./"><img style="width:100px;" src=" assets/images/components/logo.svg" alt=""></a>
        <h2 style="margin: 0 auto;" class="modal__login-title">Вход</h2>
        <form method="post" class="modal__login-form">
            <div class="modal-form-input aemail">
                <input
                    name="email"
                    type="email"
                    placeholder="Email"
                    class="modal__login-email input inpsig" />
                <?
                if (isset($_POST['email'])) {
                    if (empty($email)) {
                        echo 'Имя пусто';
                        $flag = false;
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "почта не валидна";
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
                if (isset($_POST['password'])) {
                    if (empty($password)) {
                        echo 'Имя пусто';
                        $flag = false;
                    }
                }
                ?>
            </div>
            <?
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($flag) {
                    $sql = "SELECT * FROM users WHERE email ='$email'";
                    $result = $database->query($sql)->fetch();
                    if ($result) {
                        if (password_verify($password, $result['password'])) {
                            $_SESSION['user_id'] = $result['user_id'];
                            // header('Location: ./');
                        } else {
                            echo 'Пароль неверный';
                            $flag = false;
                        }
                    } else {
                        echo "Email неверный";
                        $falg = false;
                    }
                }
            }
            ?>
            <button type="submit" class="btn modal__btn-submit">Войти →</button>
        </form>
        <div class="modal__login-form-item">
            <button class="login__btn-esia">
                <img src="assets/images/components/esia.svg" alt="госуслуги" />Госуслуги
            </button>
            <a href="./?page=register" href="#" class="login__btn-toSignup auth" style="color: #1924b1;">Регистрация</a>
            <!-- <button class="login__btn-password_reset">Забыли пароль?</button> -->
        </div>
    </div>
</div>