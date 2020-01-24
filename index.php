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
    <title>Registration</title>

</head>
<body>
<?php
require_once 'conn.php';
/*isset ОПРЕДЕЛЯЕТ БЫЛА ЛИ ЗАНЕСЕНА ПЕРЕМЕННАЯ ОТЛИЧНАЯ ОТ НУЛ
POST  ЭТО СУПЕРГЛОБАЛЬНАЯ ПЕРЕМЕННАЯ , кот содержит список  ПЕРЕМЕННЫХ ПЕРЕДАННЫХ СКРИПТУ
С ПОМОЗЬЮ $_POST ИЫ МОЖЕМ ПОЛУЧИТЬ ДАННЫЕ ИЗ ФОРМЫ ДЛЯ ДАЛЬНЕЙШНГО ИСПОЛЬЗОВАНИЯ */
if (isset($_POST['username']) && isset($_POST['password'])) {
    /* СОЗДАЕМ ПРЕМЕННУЮ КОТ БУДЕТ ХРАНИТЬ ЗНАЧЕНИЕ ПЕРЕДАННОЕ МЗ МЕТОДА $_POST*/
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRep = $_POST['password_r'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
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

        $sql = "INSERT INTO users (username, email, password, password_r, first_name, last_name, age, gender)
     VALUES('$username', '$email', '$password', '$passwordRep', '$firstName', '$lastName', '$age', '$gender')";

        $result = mysqli_query($conn, $sql);
//    }

    /*  ВЫВОДИМ ИНФО ПРИ ПОМОЩИ  alert*/
    if ($result) {
        $message = " successfool";
    } else {
        $messageFalls = "falls333";
    }
}
?>
<div class="container">
    <form class="rForm" method="post">
        <h1>Registration</h1>
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
            <input type="text" name="username" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="password" name="password_r" placeholder="repeatPassword" required>
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <input type="text" name="age" placeholder="age" required>
            <input type="text" name="gender" placeholder="gender" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Registration</button>
        </label>
    </form>
    <a href="login.php" > <button type="button"  class="btn btn-primary " id="placeButton">Sign in</button></a>

</div>


</body>

</html>