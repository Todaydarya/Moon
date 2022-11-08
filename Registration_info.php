<?php
    session_start();
    require_once 'connect.php';
    require_once 'vendor/autoload.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];


    $password = md5($_POST['password']);
    $password_2 = md5($_POST['password_2']);


    $labels = [
        'email' => 'E-mail',
        'password' => 'Пароль',
        'name' => 'Имя',
        'login' => 'Логин',
    ];


    $rules = [

        // заполнение всех полей
        'required' => ['email', 'password', 'password_2', 'login',],
        
        // Проверка email
        'email' => ['email'],

        // Длина пароля
        'lengthMin' => [
            ['password', 8],
        ],

        // только буквы
        'regex' => [
            ['name', '/^[a-zA-Zа-яА-ЯёЁ]{1,20}$/u']
        ]
    ];

    if (!empty($_POST)){
        Valitron\Validator:: langdir('lang');
        Valitron\Validator:: lang('ru');
        $v = new Valitron\Validator($_POST);
        $v->rules($rules);
        if ($v->validate()){
            $_SESSION['success'] = 'Валидация прошла успешно';
        }else{
            $errors = '<ul>';
            foreach ($v->errors() as $errors){
                foreach ($errors as $item){
                    $errors .="<li>{$item}</li>";
                }
            }
            $errors .= "</ul>";
            $_SESSION['errors'] = $errors;
        }
        header("Location: Registration.php");
        die;
    }



    if ($password === $password_2){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES ('', '$login', '$password', '$email')");
        header('Location: http://mooooooooooon');
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: Registration.php');
    }
?>
