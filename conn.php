<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'task13';

$conn = new mysqli($servername, $username,$password, $dbname);
$select_db = mysqli_select_db($conn, 'task13');

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
} echo "Connection successfully";