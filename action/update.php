<?php 
$id=$_POST["id"];
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$db=new mysqli("localhost","root","","companyproject");
$query="UPDATE company SET name='$name',address='$address',phone='$phone' WHERE id='$id'";
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