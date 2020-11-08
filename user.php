<?php
$con= mysqli_connect('localhost','root');
if($con){
	echo "connection successful";

} else{
echo "not connect!";
}
mysqli_select_db($con,'userdata');

$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$query="insert into userinfodata(user,email,phone,comment) values('$user','$email','$phone','$comment')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');

?>