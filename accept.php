<?php
//accept one's request for friend

session_start();
$server="localhost";
$db_username="root";
$db_password="";
$db_name="proj1"; 
$con=mysqli_connect($server, $db_username, $db_password, $db_name);
if(!$con)
{
	die("can't connect".mysqli_error());
}

$userid=$_SESSION['userid'];
$userid2=$_GET['friendid'];
$sql1="insert into friendship values ('$userid', '$userid2')";
$result1=mysqli_query($con, $sql1);
$sql2="insert into friendship values ('$userid2', '$userid')";
$result2=mysqli_query($con, $sql2);
$sql3="delete from request where userID1='$userid2' and userID2='$userid'";
$result3=mysqli_query($con, $sql3);
if($result1&&$result2&&$result3)
{
	echo"<script type='text/javascript'>alert('Successfully!');location='requestreceived.php';</script>";
}
else
{
	echo"<script type='text/javascript'>alert('Please try again.');location='requestreceived.php';</script>";
}

?>
