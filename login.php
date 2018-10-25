<?php
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($conn,'demo') or die(mysql_error());
$sql="select  * from demo11 where name='$user_name' and password='$password'";
$result=mysqli_query($conn,$sql) ;
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
echo $row["name"];
echo "welcome";
header("Location:Project.html");
exit();
}
else
echo "password does not match";?>