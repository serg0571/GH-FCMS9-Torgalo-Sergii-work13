<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet"  type="text/css" href="style.css" >-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        h1 {color:blue; font-size: 20px;}
input {
    display: flex;
    margin: 5px 0;
}
    </style>
    <title>Registration</title>

</head>
<body>
<?php
require_once 'conn.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRep = $_POST['password_r'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

        $sql = "INSERT INTO users (username, email, password, password_r, first_name, last_name, age, gender)
     VALUES('$username', '$email', '$password', '$passwordRep', '$firstName', '$lastName', '$age', '$gender')";

        $result = mysqli_query($conn, $sql);

    if ($result) {
        $message = " successfool";
    } else {
        $messageFalls = "falls333";
    }
}
?>
<div class="container" >
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
            <button class="btn btn-lg btn-primary " type="submit"> Registration</button>
        </label>
    </form>
<div class="placeButton">
    <a href="login.php" > <button class="btn btn-lg btn-primary " type="submit">Sign in</button></a>
</div>
</div>


</body>

</html>