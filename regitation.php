<?php
require_once 'db.php';

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $date=$_POST['dateof'];
    $password=$_POST['password'];
    $copassword=$_POST['copassword'];
    date_default_timezone_set('Asia/Dhaka');
    $datetime=date('Y-m-d H:i:s');

if(strlen($password) >= 8 && strlen($copassword) >= 8){
    if($password===$copassword){
        $password_hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `studentinfo`( `fname`, `lname`, `email`, `gender`, `date_of_birth`, `password`,`datetime`) VALUES ('$fname','$lname','$email','$gender','$date','$password_hash','$datetime')";
        $result=mysqli_query(getconnection(),$sql);
        if($result){
            echo "succesfully insert data";
        }else{
            echo "unsuccesfull data insert";
        }
    }else{
        echo "password it's not match";
    }
}else{
    echo "please 8 charceter";
}

?>
