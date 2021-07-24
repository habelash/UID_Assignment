<?php

// Getting the details from users

$name=$_POST['uname'];
$password=$_POST['psw'];

// Default username and password

$username = '1BY17CS005';
$pwd = $username;

if  ($name == $username && $password==$pwd)
  {
    header("Location: ./slots.php");
    exit();
  }
else {
  header("Location: ./error.php");
}

?>
