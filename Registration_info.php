<?php
    session_start();
    require_once 'connect.php';
    require_once 'vendor/autoload.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];

    $_SESSION['message'] = "";

    $password = md5($_POST['password']);
    $password_2 = md5($_POST['password_2']);

    if ($password === $password_2){
        $array = explode('@',$email);
        if($array[1] != 'mail.ru'){
            if($array[1] != 'gmail.com'){
                if($array[1] != 'yandex.ru'){
                    var_dump($array[1]);
                    $_SESSION['message'] = 'Индекс почты введён не верно';
                    header('Location: Registration.php');
                }else{
                    mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`) VALUES ('', '$login', '$password', '$email', '$name')");
                    header('Location: http://mooooooooooon/index.php');
                }
            }else{
                mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`) VALUES ('', '$login', '$password', '$email', '$name')");
                header('Location: http://mooooooooooon/index.php');
            }
        } else {
            mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`) VALUES ('', '$login', '$password', '$email', '$name')");
                header('Location: http://mooooooooooon/index.php');
        }
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: Registration.php');
    }

    // $rules = [

    //     // заполнение всех полей
    //     'required' => ['email', 'password', 'password_2', 'login',],
        
    //     // Проверка email
    //     'email' => ['email'],

    //     // Длина пароля
    //     'lengthMin' => [
    //         ['password', 8],
    //     ],

    //     // только буквы
    //     'regex' => [
    //         ['name', '/^[a-zA-Zа-яА-ЯёЁ]{1,20}$/u']
    //     ]
    // ];

    // if (!empty($_POST)){
    //     Valitron\Validator:: langdir('lang');
    //     Valitron\Validator:: lang('ru');
    //     $v = new Valitron\Validator($_POST);
    //     $v->rules($rules);
    //     if ($v->validate()){
    //         $_SESSION['success'] = 'Валидация прошла успешно';
    //     }else{
    //         $errors = '<ul>';
    //         foreach ($v->errors() as $errors){
    //             foreach ($errors as $item){
    //                 $errors .="<li>{$item}</li>";
    //             }
    //         }
    //         $errors .= "</ul>";
    //         $_SESSION['errors'] = $errors;
    //     }
    //     header("Location: Registration.php");
    //     die;
    // }
?>
