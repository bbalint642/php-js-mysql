<?php

session_start();

include 'conn.php';

$uname=$_POST['name'];
$pass=$_POST['pass'];

$sql="SELECT * FROM signup WHERE name='$uname' AND passs='$pass'";

$result=$conn->query($sql);

$_SESSION['name']=$_POST['uname'];

header("Location:home.php");


?>