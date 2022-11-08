<?php
    session_start();
    unset($_SESSION['user']);
    header('Location: http://auth/Auth.php');
?>