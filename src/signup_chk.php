<?php
	include("./error.php");

$id=$_POST['id'];
$pw=$_POST['pw'];
$pw_chk=$_POST['pw_chk'];

include("./dbconn.php");

if($pw!=$pw_chk){

	echo "<script>alert('password is not matched');location.href='./index.php'</script>";
	exit();
}



$check="SELECT * FROM b_user where id='$id'";
$result=$conn->query($check);
$row=mysqli_fetch_array($result);

if($row==1)
{
	echo "<script>alert('exist SAME ID');location.href='./index.php'</script>";
	exit();

}

$signup=mysqli_query($conn,"INSERT INTO `b_user` (`id`,`pw`) VALUES ('$id','$pw')");

if($signup){
	echo "<script>alert('signup OK');location.href='./index.php'</script>";
}


?>
