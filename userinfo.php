<?php 

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection established successfully";
}else{
	echo "no DatabaseConnection";
}

mysqli_select_db($con,'practice');

$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comments'];
$query="insert into userinfodata(user,email,mobile,comment) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);
header('location:index.php');
?>