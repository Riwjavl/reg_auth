<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <meta http-equiv="X-UA-Campitable" content="ie=edge">
    <title>Форма регистрации и авторизации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        
        <?php
            $user = 1;
            if (isset($_COOKIE["user"]) == ''):

        ?>
        
        <div class="row">
            <div class="col">
                <h2>Форма регистрации</h2>
                <form action="check.php" method="post">
                    <label>Имя</label><br>
                    <input type="text" class="for-control" name="name" id="name"><br>
                    <label>Почта</label><br>
                    <input type="email" class="for-control" name="email" id="email"><br>
                     <label>Пароль</label><br>
                    <input type="password" class="for-control" name="password" id="password"><br>
                    <label>Подтвердите пароль</label><br>
                    <input type="password" class="for-control" name="password_confirm" id="password_confirm"><br>
                    <button type="submit" class="btn btn-sucess">Зарегистрировать</button>
                </form>
            </div>
            <div class="col">
                <h2>Форма авторизации</h2>
                <form action="auth.php" method="post">
                    <label>Почта</label><br>
                    <input type="email" class="for-control" name="email" id="email"><br>
                    <label>Пароль</label><br>
                    <input type="password" class="for-control" name="password" id="password"><br>
                    <button type="submit" class="btn btn-sucess">Авторизоваться</button>
                </form>
            </div>
        </div>
        
        <?php else: ?>
            <h3>Привет <?=$_COOKIE['user']?>.</h3><br>
            <h4>Для выхода нажмите <a href="/exit.php">здесь</a>.</h4>
        <?php endif;?>

    </div>
</body>
</html>
