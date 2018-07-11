<?php 
$id=$_GET["id"];
$db=new mysqli("localhost","root","","companyproject");
$query="delete from company where id=".$id;
$result=$db->query($query);
if($result)
{
	header("Location:index.php");
}
else
{
	echo $db->error;
}

 ?>