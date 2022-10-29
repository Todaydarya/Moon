<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_2 = $_POST['password_2'];



	function generateSalt()
	{
		$salt = '';
		$saltLength = 8; // длина соли
		
		for($i = 0; $i < $saltLength; $i++) {
			$salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
		}
		
		return $salt;
	}


	$salt = generateSalt(); // соль
	$password = md5($salt . $_POST['password']); // соленый пароль 
    $password_2 = md5($salt . $_POST['password_2']);


    if ($password === $password_2){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES ('', '$login', '$password', '$email')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: Main.php');
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: Registration.php');
    }
?>
