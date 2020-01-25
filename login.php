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
if (isset($_POST['usernameR']) && isset($_POST['passwordR'])) {

    $username = $_POST['usernameR'];
    $password = $_POST['passwordR'];
 //    if ($password === $passwordRep) {

    $sql = "INSERT INTO users_sign(username,  password)VALUES('$username', '$password')";

    $result = mysqli_query($conn, $sql);
//    }

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
    <div id="placeButton" >
    <a href="index.php" >
        <button type="button" class="btn btn-primary">Registration</button>
    </a>
    </div>
</div>
</body>
</html>