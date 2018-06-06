<?php
include 'dbh.php';
$uname=$_POST['uname'];



$sql="insert into rreport(username)
values ('$uname')";
$result=$conn->query($sql);

header("Location:index.php");


?>