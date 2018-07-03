<?php
	include("./error.php");

$id=$_POST['id'];
$pw=$_POST['pw'];
$pw_chk=$_POST['pw_chk'];

include("./dbconn.php");

if($pw!=$pw_chk){
	
	echo "password is not matched!";
	echo "<a href=./index.php>back page</a>";
	exit();	
}



$check="SELECT * FROM b_user where id='$id'";
$result=$conn->query($check);

if($result->num_rows==1)
{
	echo "exist same id";
	echo "<a href=./index.php>back page</a>";
	exit();

}

$signup=mysqli_query($conn,"INSERT INTO `b_user` (`id`,`pw`) VALUES ('$id','$pw')");

if($signup){
	echo "success";
}


?>

