<?php
    session_start();
?>
<!DOCTYPE html>
<html class="disable-select">
    <link rel="stylesheet" href="style.css">
    <head>
        <title>Авторизация</title> 
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'> </script>
        <script src='proverka.js'></script>
    </head>

    <body class="Fon FormAuth">
        <form action="Auth_info.php" method="post">
            <fieldset class="MainFieldset">
                <h1 class="p1">Вход</h1>

                <h4 class="p2Auth">Логин</h4>
                <input type="text" class="inputAuth input-en" name="login" id="login" required autocomplete="off" title="Введите только английские буквы" pattern="^[a-zA-Z\s]+$"> 

                <h4 class="p2Auth">Пароль</h2>
                <input type="password" class="inputAuth" name="password" id="password" required  title="Введите только цифры и английские буквы" pattern="^[a-zA-Z\s1-9]+$">
                
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message']. '</p>' ;
                    }
                    unset($_SESSION['message']);
                ?>

                <input type="submit" class="inputEnter p3 inputEnterAuth" value="Продолжить">
                <a href="http://auth/Registration.php" class="reg1 AuthPx">Зарегистрироваться</a>
                <video id="video_background" preload="auto" autoplay loop playsinline muted >
                    <source src="Moon.mp4" type='video/mp4'/>
                </video>
            </fieldset>
        </form>
    </body>
</html>

