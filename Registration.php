<?php
    session_start();
    require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    
    <head>
        <title>Регистрация</title> 
    </head>

    <body class="MainFon">
    
        <form action="Registration_info.php" method="post">
            <fieldset class="MainFieldsetReg">
                
            <!-- Валидность кода. Вывод сообщения -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col">
                        <?php if (!empty($_SESSION['errors'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['errors']; unset($_SESSION['errors']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($_SESSION['success'])): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div> -->




                <h1 class="p1">Регистрация</h1>

                <h4 class="p2">Логин</h4>
                <input type="text" class="input" name="login">

                <h4 class="p2">Имя</h2>
                <input type="text" class="input" name="name">

                <h4 class="p2">Email</h4>
                <input type="text" class="input" name="email">

                <h4 class="p2">Пароль</h2>
                <input type="password" class="input" name="password">

                <h4 class="p2">Подтверждение пароля</h2>
                <input type="password" class="input" name="password_2">
                
                <?php
                    if ($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message']. '</p>' ;
                    }
                    unset($_SESSION['message']);
                ?>
                <div class="gg">
                    <input type="checkbox" id="raz" required class="reg1"/>
                    <label for="raz" class="reg1">Согласие на обработку персональных данных</label>
                </div>
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
    </body>
</html>