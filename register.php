<?php

session_start();

$servername = "localhost";
$username = "root";
$pwd="";



$connDB = new mysqli($servername , $username , $pwd,'myweb');



$u = $_POST['user'];
$e = $_POST['email'];
$p = $_POST['pwd'];

$s= "INSERT INTO users(user,email,passwords) values('$u' ,'$e','$p')";

if(mysqli_query($connDB , $s))
{
    echo "<script>alert('Your account created successfuly'); window.location.href='http://localhost/PersonalWeb%20-%20Copy/register.html';</script>";
}else{
    echo "Error".mysqli_error($connDB);

}




?>