<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
<?php
require_once 'conn.php';
/*isset ОПРЕДЕЛЯЕТ БЫЛА ЛИ ЗАНЕСЕНА ПЕРЕМЕННАЯ ОТЛИЧНАЯ ОТ НУЛ
POST  ЭТО СУПЕРГЛОБАЛЬНАЯ ПЕРЕМЕННАЯ , кот содержит список  ПЕРЕМЕННЫХ ПЕРЕДАННЫХ СКРИПТУ
С ПОМОЗЬЮ $_POST ИЫ МОЖЕМ ПОЛУЧИТЬ ДАННЫЕ ИЗ ФОРМЫ ДЛЯ ДАЛЬНЕЙШНГО ИСПОЛЬЗОВАНИЯ */
if (isset($_POST['usernameR']) && isset($_POST['passwordR'])) {
    /* СОЗДАЕМ ПРЕМЕННУЮ КОТ БУДЕТ ХРАНИТЬ ЗНАЧЕНИЕ ПЕРЕДАННОЕ МЗ МЕТОДА $_POST*/
    $username = $_POST['usernameR'];
    $password = $_POST['passwordR'];

    /* ПЕРЕДАЕМ ЗАПРОС В БАЗУ ДАННЫХ
    INSERT INTO ПОИОГАЕТ ВНЕСТИ ДАННЫЕ В ТАБЛИЦУ
    users НАЗВАНИЕ ТАБЛИЦЫ
    и пишем те значения кот надо ввести
    VALUES передает сами значения*/
    /*$sql = "SELECT id, title, body FROM users";
        echo '<pre>';
        var_dump($sql);
        echo '<pre>';
        exit();*/

//    if ($password === $passwordRep) {

    $sql = "INSERT INTO users_sign(username,  password)VALUES('$username', '$password')";


    $result = mysqli_query($conn, $sql);
//    }

    /*  ВЫВОДИМ ИНФО ПРИ ПОМОЩИ  alert*/
    if ($result) {
        $message = "successful";
    } else {
        echo 'no';
        $messageFalls = "fall";
    }
}
?>
<div class="container">
    <form class="singForm" method="post">
        <h1>Sign in</h1>
        <?php
        if (isset($message)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $message;
                ?>
            </div>
        <?php } ?>
        <?php
        if (isset($messageFalls)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $messageFalls;
                ?>
            </div>
        <?php } ?>
        <label>
            <input type="text" name="usernameR" placeholder="Name" required>
            <input type="password" name="passwordR" placeholder="password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Sign in</button>
        </label>
    </form>
    <a href="index.php" >
        <button type="button" class="btn btn-primary" id="placeButton">Registration</button>
    </a>
</div>
</body>
</html>