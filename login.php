<?php

require_once 'db.php';

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM studentinfo WHERE email = '$email'";

$query = mysqli_query(getconnection(), $sql);
if($query->num_rows) {
    $user = mysqli_fetch_assoc($query);
    if (password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user;
        header('location: http://localhost/Auth/');
    } else {
        echo 'Wrong password';
    }
} else {
    echo 'No user with this email';
}
