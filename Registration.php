<?php
    session_start();
    require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html class="disable-select ">
    <link rel="stylesheet" href="style.css">
    
    <head>
        <title>Регистрация</title> 
    </head>

    <body class="Fon">
        <form action="Registration_info.php" method="post">
            <fieldset class="MainFieldsetReg">
                <h1 class="p1">Регистрация</h1>
                <div class="gg">
                    <div class="marginreg">
                        <h4 class="p2">Логин</h4>
                        <input type="text" class="input" name="login" required autocomplete="off" title="Введите только английские буквы" pattern="^[a-zA-Z\s]+$">

                        <h4 class="p2">Имя</h4>
                        <input type="text" class="input" name="name" autocomplete="off" required>

                        <h4 class="p2">Email</h4>
                        <input type="text" class="input" name="email" autocomplete="off" required title="Введите только цифры и английские буквы" pattern="^[a-zA-Z\s1-9]+$]">
                    </div>
                    <div class="marginreg">
                        <h4 class="p2">Пароль</h2>
                        <input type="password" class="input" name="password" required title="Введите только цифры и английские буквы" pattern="^[a-zA-Z\s1-9]+$]">

                        <h4 class="p2">Подтверждение пароля</h2>
                        <input type="password" class="input" name="password_2" required title="Введите только цифры и английские буквы" pattern="^[a-zA-Z\s1-9]+$]">
                    </div>
                </div>
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message']. '</p>' ;
                    }
                    unset($_SESSION['message']);
                ?>
                <div class="gg">
                    <input type="checkbox" id="raz" required class="reg1" required/>
                    <label for="raz" class="reg1 RegPx">Согласие на обработку персональных данных</label>
                </div>
                <div class="gg">
                    <input type="button" class="inputEnter p3 inputEnterReg" onclick="history.back();" value="Вернуться">
                    <input type="submit" class="inputEnter p3 inputEnterReg " value="Продолжить">
                </div>
            </fieldset>
            <video id="video_background" preload="auto" autoplay loop playsinline muted >
                <source src="Moon.mp4" type='video/mp4' />
            </video>
        </form> 
    </body>
</html>