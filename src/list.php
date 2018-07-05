<?php
  include("./header.php");
  include("./dbconn.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>free board</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Free Board</h2>
  <p>everything list :)</p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Idx</th>
        <th>Name</th>
        <th>Title</th>
        <th>Date</th>
        <th>Hit</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = 'select * from board_free order by b_no desc';

        if( $stmt = mysqli_prepare($conn, $sql) ) {
        #		mysqli_stmt_bind_param($stmt);
        		mysqli_stmt_execute($stmt);
        		$result = mysqli_stmt_get_result($stmt);

        		while( $row = mysqli_fetch_assoc($result)){


  #      $result = $conn->query($sql);
  #      while ($row=mysqli_fetch_assoc($result)) {

  #        $datetime=explode('',$row['b_date']);
  #        $date=$datetime[0];
  #        $time=$datetime[1];
  #        if($date==Date('Y-m-d')){
  #          $row['b_date']=$time;
  #        }
  #        else{
  #          $row['b_date']=$date;
  #        }
          ?>
          <tr>
            <td class="idx"><?php echo $row['b_no']?></td>
            <td class='name"'><?php echo $row['b_id']?></td>
            <td class="title"><a href="./read.php?num=<? $row['b_no']?>"><?php echo $row['b_title']?></a></td>
            <td class="date"><?php echo $row['b_date']?></td>
            <td class="hit"><?php echo $row['b_hit']?></td>
            <td> </td>
          </tr>

      <?php
  #      }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
      ?>

    </tbody>
  </table>
</div>

</body>
</html>
