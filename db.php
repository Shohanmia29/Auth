<?php
$connection=mysqli_connect('localhost','root','','authentication');
function getconnection(){
    global $connection;
    return $connection;
}