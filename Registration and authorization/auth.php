<?php
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $password = md5($password."eucnwhsgi");

    $mysql = new mysqli('127.0.0.1', 'root', '', 'bdregister');
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND 
    `password` = '$password'");

    $user = $result->fetch_assoc();
    if(empty($user) or count(array($user)) == 0) {
        echo "Пользователь не найден или введённые данные неверны";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();

    header('Location: /');
?>