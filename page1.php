<?php
$con=mysqli_connect('localhost','root','','altamed');
$fstname=$_POST['fstname'];
$lstname=$_POST['lstname'];
$phone=$_POST['phone'];
$usname=$_POST['usname'];
$pass=$_POST['pass'];
$sql="INSERT INTO register VALUE('$fstname','$lstname','$phone','$usname','$pass')";
$rs=mysqli_query($con,$sql);
if($rs)
{
header ("location:login.html");
}
?>