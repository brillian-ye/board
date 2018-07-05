<?php
  include("./dbconn.php");

  $b_id=$_SESSION['id'];
  $b_pw=$_POST['bpw'];
  $b_title=$_POST['btitle'];
  $b_content=$_POST['bcontent'];




  $date=date('Y-m-d H:i:s');

  $sql='insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id,b_password)
  values(null,"'.$b_title.'","'.$b_content.'","'.$date.'",0,"'.$b_id.'",password("'.$b_pw.'"))';

  $result=$conn->query($sql);

  if($result){
    echo "<script>alert('write OK');location.href='./list.php'</script>";
    $b_no=$conn->insert_id;

  }
  else{
    echo "<script>alert('DB error');history.back()</script>";
  }



?>
