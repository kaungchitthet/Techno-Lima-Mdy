<?php 

$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$db=new mysqli("localhost","root","","companyproject");
$query="insert into company(name,address,phone) values('$name','$address','$phone')";
$result=$db->query($query);
if($result)
{
	header("Location:../index.php");
}
else
{
	echo $db->error;
}

 ?>