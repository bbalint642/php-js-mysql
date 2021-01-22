<?php

include 'conn.php';
$uname=$_POST['name'];
$pass=$_POST['pass'];

$sql="insert into signup(name,passs)

values('$uname','$pass')";

$result=$conn->query($sql);

header("Location:index.php");

?>