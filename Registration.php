<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <head>
        <!-- <link rel="styleshhet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
        <title></title> 
    </head>

    <body class="MainFon">
        <form action="Registration_info.php" method="post" >
            <fieldset class="MainFieldset">
                
                <h1 class="p1">Регистрация</h1>

                <h4 class="p2">Логин</h4>
                <input type="text" class="input" name="login" required>

                <h4 class="p2">Email</h4>
                <input type="email" class="input" name="email" required>

                <h4 class="p2">Пароль</h2>
                <input type="password" class="input" name="password" required>

                <h4 class="p2">Подтверждение пароля</h2>
                <input type="password" class="input" name="password_2" required>
                
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message']. '</p>' ;
                    }
                    unset($_SESSION['message']);
                ?>
                
                <input type="submit" class="inputEnter p3" value="Enter" class="p2">
            </fieldset>
            <video id="video_background" preload="auto" autoplay loop playsinline muted >
                <source src="Moon.mp4" type='video/mp4' />
            </video>
        </form>   
    </body>
</html>