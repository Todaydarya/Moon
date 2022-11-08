<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];


    $password = md5($_POST['password']);
    $password_2 = md5($_POST['password_2']);

    if ($password === $password_2){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES ('', '$login', '$password', '$email')");
        header('Location: http://mooooooooooon');
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: Registration.php');
    }
?>
