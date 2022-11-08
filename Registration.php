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
    
        <form action="Registration_info.php" method="post">
            <fieldset class="MainFieldsetReg">
                
                <h1 class="p1">Регистрация</h1>

                <h4 class="p2">Логин</h4>
                <input type="text" class="input" name="login" required>

                <h4 class="p2">Email</h4>
                <input type="email" class="input" name="email" pattern="[A-Za-z]+[0-9]{6}+^[ 0-9]+$" required>

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
                 <!-- <div>
                    <input type="checkbox" id="input" />
                    <button type="button" id="btn" onclick="alert('Working')" disabled="disabled">Try to click me</button>
                </div> -->
                <div class="gg">
                    <input type="button" class="inputEnter p3" onclick="history.back();" value="Вернуться">
                    <input type="submit" class="inputEnter p3" value="Продолжить" class="p2">
                </div>
                
            </fieldset>
            <video id="video_background" preload="auto" autoplay loop playsinline muted >
                <source src="Moon.mp4" type='video/mp4' />
            </video>
        </form> 
          
        <script src="email.js"></script>
        <!-- <script>
            $("input").on("keypress", function(e) {
            
            var char = /["a-zA-Z]/;
            var val = String.fromCharCode(e.which);
            var test = char.test(val);
            
            if(!test) return false;
            })
        </script> -->
        <!-- <input type="submit" value="Проверка" onclick="ValidateEmail()"> -->
    </body>
</html>