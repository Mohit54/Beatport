<?php
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['password'];

if( $user_name== "")
         {

	echo "username cant be null";
	}
elseif($email== ""){
	echo "email cant be null";

}
elseif($password== ""){
	echo "password cant be null";

}
else{

$conn=mysqli_connect('localhost:8080','root','') or die(mysql_error());
mysqli_select_db($conn,'demo')or die(mysql_error());
$sql="INSERT INTO demo11 VALUES ('$user_name','$email','$password')";
mysqli_query($conn,$sql) ;
header("Location:login.html");
	exit();
		
}
?>