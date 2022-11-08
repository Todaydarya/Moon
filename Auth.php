<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <head>
        <!-- <link rel="styleshhet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
        <title>Авторизация</title> 
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'> </script>
        <script src='proverka.js'></script>
    </head>

    <body class="MainFon">
        <form action="Auth_info.php" method="post">
            <fieldset class="MainFieldset">
            <h1 class="p1">Вход</h1>
            <h4 class="p2">Логин</h4>
            <input type="text" class="input input-en" name="login" id="login" required >  
            <h4 class="p2">Пароль</h2>
            <input type="password" class="input" name="password" id="password" required>
            <input type="submit" class="inputEnter p3" value="Продолжить">
            <a href="http://auth/Registration.php" class="reg1">Зарегистрироваться</a>
            <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message']. '</p>' ;
                    }
                    unset($_SESSION['message']);
                ?>
            <video id="video_background" preload="auto" autoplay loop playsinline muted >
                <source src="Moon.mp4" type='video/mp4'/>
            </video>
            </fieldset>
        </form>

        <!-- <script>
            $("input").on("keypress", function(e) {
  
            var char = /["a-zA-Z]/;
            var val = String.fromCharCode(e.which);
            var test = char.test(val);
            
            if(!test) return false
            })
        </script>
         -->
    </body>
</html>

