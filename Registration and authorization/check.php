<?php
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    $error = '';
    if(trim($name) == '')
        $error = 'Введите имя';
    else if(trim($email) == '')
        $error = 'Введите почту';
    else if(trim($password) == '')
        $error = 'Введите пароль';
    else if(trim($password_confirm) == '')
        $error = 'Подтвердите пароль';
    else if(trim($password_confirm != $password))
        $error = 'Пароли не совпадают';

    if($error != '') {
        echo $error;
        exit;
    }

    $password = md5($password."eucnwhsgi");

    $mysql = new mysqli('127.0.0.1', 'root', '', 'bdregister');
    $mysql->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES('$name', '$email', '$password')");

    $mysql->close();

    header('Location: /');
?>