<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn = new mysqli('localhost','root','','mydb');
if($conn->connect_error)
{
die('connection faild :'.$conn->connect_error);
}
else
{
$stmt= $conn->prepare("insert into users(username,email,password)values(?,?,?)");
$stmt->bind_param("sss",$username,$email,$password);
$stmt->execute();
echo "registation successfuly";
header('location:projrct.php');
$stmt->close();
$conn->close();
}
?>