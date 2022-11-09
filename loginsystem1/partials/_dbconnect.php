<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect('localhost','root','','id');
if (!$conn) {
         echo "success";
     } 
     else {
    die("Error" . mysqli_connect_error());
}
