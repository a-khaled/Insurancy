<?php
session_start();
require 'dbconfig/config.php';

$query = "select * from treatreq WHERE reciever= '" . $username= $_SESSION['email'] . "' AND approval='' AND notif_status='0'";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);


 ?>

<html>
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/web2.css">
<title>NOTIFICATIONS</title>

</head>

<body class="treat">
<div class="overlay">
<div class="container">
<img src="images/msg.jpg">

    <form action="notification.php" id="request" method="post">


     <div id="treat_req">

<label for="from">Requester: <?php echo  $row['sender']?></label>
<!-- <label for="request"id="request"> to patient mr : ahmed khaled he is bla bla bla</label> -->

<br>

<BR>

 <label class="comment" for="textarea"><b>Request: <?php echo  $row['comment']?></b></label>
  <div class="comment">
    <label class="comment" for="textarea"><b></b></label>
  <!--  <textarea id="comment" id="textarea" name="comment"> </textarea> -->
  </div>

<input type="submit" name="accept" id="treatsend" value="accept" class="btn" >
<input type="submit" name="reject" id="treatsend" value="reject" class="btn" >
<input type="submit" name="back" id="treatsend" value="back" class="btn" >

</form>
<?php
if (isset($_POST['accept'])) {
  $query1 = "UPDATE treatreq SET approval='accepted', notif_status='1' WHERE reciever= '" . $username= $_SESSION['email'] . "' AND notif_status='0' LIMIT 1";
  $query_run1 = mysqli_query($con,$query1);

  if ($query_run1) {
     echo '<script type="text/javascript"> alert("request accepted") </script>';
   }
  else {
   echo '<script type="text/javascript"> alert("Error") </script>';
  }

 header('location:notification.php');

}
if (isset($_POST['reject'])) {
  $query1 = "UPDATE treatreq SET approval='rejected', notif_status='1' WHERE reciever= '" . $username= $_SESSION['email'] . "' AND notif_status='0' LIMIT 1";
  $query_run1 = mysqli_query($con,$query1);

  if ($query_run1) {
     echo '<script type="text/javascript"> alert("request rejected") </script>';
   }
  else {
   echo '<script type="text/javascript"> alert("Error") </script>';
  }

  header('location:notification.php');
}
if (isset($_POST['back'])) {
  header('location:ins_company.php');
}
 ?>
</div>
</div>
</body>
</html>
