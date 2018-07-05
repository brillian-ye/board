<?php

include("./dbconn.php");

$id = $_POST['id'];
$pw = $_POST['pw'];

$check="select * from b_user where id='$id'";

$result=$conn->query($check);

if($result->num_rows==1){
  $row=mysqli_fetch_assoc($result);
  if($row['pw']==$pw){
    $_SESSION['id']=$id;
    if(isset($_SESSION['id'])){
      echo"<script>alert('welcome');location.href='./list.php'</script>";
    }
    else{
      echo"<script>alert('session error');location.href='./index.php'</script>";
    }
  }
  else {
    echo"<script>alert('wrong id or password 1');location.href='./index.php'</script>";
  }
}
else {
  echo"<script>alert('wrong id or password 2');location.href='./index.php'</script>";
}

?>
