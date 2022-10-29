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
        <form action="Registration.php" method="post">
            <fieldset class="MainFieldset">
            <h1 class="p1">Вход</h1>
                <h4 class="p2">Логин</h4>
                <input type="text" class="input" name="login" id="login">  
                <h4 class="p2">Пароль</h2>
                <input type="password" class="input" name="password" id="password">
                <input type="submit" class="inputEnter p3" value="Enter">
            
                <video id="video_background" preload="auto" autoplay loop playsinline muted >
                    <source src="Moon.mp4" type='video/mp4' />
                </video>
            </fieldset>
        </form>   
    </body>
</html>

