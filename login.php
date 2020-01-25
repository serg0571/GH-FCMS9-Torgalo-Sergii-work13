<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    <link rel="stylesheet"  type="text/css" href="style.css" >-->
    <title>login</title>
    <style type="text/css">
        h1 {
            color: blue;
            font-size: 20px;
        }

        input {
            display: flex;
            margin: 5px 0;
        }
    </style>
</head>
<body>

// if ($password === $passwordRep) {

$sql = "INSERT INTO users_sign(username, password)VALUES('$username', '$password')";

$result = mysqli_query($conn, $sql);
// }

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

        <label>
            <input type="text" name="usernameR" placeholder="Name" required>
            <input type="password" name="passwordR" placeholder="password" required>
            <button class="btn btn-lg btn-primary " type="submit"> Sign in</button>
        </label>
    </form>

    <a href="index.php">
        <button class="btn btn-lg btn-primary " type="submit">Registration</button>
    </a>

</div>
<?php
//session_start();
require_once 'conn.php';
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   /* number of result*/

    $count = mysqli_num_rows($result);
    if ($conn == 1) {
        $_SESSION['username'] = $username;
    } else {
        $messageFalls = "falls";
    }
}
//checking empty
if (iseet($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "hello" . $username . "";
    echo "we entered";
//echo "<a href="login" . php class="btn btn - lg btn - primary "> Logout</a>";

}
?>
</body>
</html>