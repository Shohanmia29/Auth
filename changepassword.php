<?php
require_once 'db.php';

session_start();


if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $confirm_password=$_POST['confrim_password'];
    if ($new_password == $confirm_password) {
        if (password_verify($old_password, $_SESSION['user']['password'])) {
            $password = password_hash($new_password, PASSWORD_DEFAULT);
            $id = $_SESSION['user']['id'];
            $sql="UPDATE `studentinfo` SET password = '$password' WHERE id = $id";
            if (mysqli_query(getconnection(), $sql)) {
                echo 'Password updated';
            } else {
                echo 'Update failed';
            }
        } else {
            echo 'Old password is invalid';
        }
    } else {
        echo 'Password and Confirm password not matched';
    }
}
else {
    header('location: http://localhost/Auth/');
}
