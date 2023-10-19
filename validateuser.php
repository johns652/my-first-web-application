<?php
include_once('adminlog.php');
function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$usname=test_input($_POST["usname"]);
$pass=test_input($_POST["pass"]);
$stmt=$con->prepare("SELECT username,password FROM register");
$stmt->execute();
$users=$stmt->fetchAll();
foreach($users as $user)
{
if(($user['username']==$usname)&&
($user['password']==$pass))
{
header("location:page3.html");
}
else{
echo "WRONG INFORMATION";
die();
}}}
?>