<?php

session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];

$sql="insert into posts(msg,name) values('$msg','$name')";
$results==$conn->query($sql);

header("Location:home.php");


?>