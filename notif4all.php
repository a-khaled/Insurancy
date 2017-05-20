<?php
session_start();
require 'dbconfig/config.php';

$query = "select * from treatreq WHERE sender= '" . $username= $_SESSION['email'] . "'";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);


 ?>

<html>
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/web.css">
<title>NOTIFICATIONS</title>

</head>

<body class="treat">
<div class="overlay">
<div class="container">
<img src="images/msg.jpg">

    <form action="#" id="request"method="post">


     <div id="treat_req">

<label for="from">From: <?php echo  $row['sender']?></label>
<label for="request"id="request">your request is :</label>

<br>
<label for="request"id="request"><?php echo  $row['approval']?></label>
<BR>

<!-- <label class="comment" for="textarea"><b>comment if there </b></label>
  <div class="comment">
    <textarea id="comment" id="textarea" name="comment"> </textarea>
  </div> -->

<input type="submit" name="ok" id="treatsend" value="ok" class="btn" >
<?php
if (isset($_POST['ok'])) {
  header('location:hospital.php');
}
 ?>
<!-- <input type="submit" name="signinbtn" id="treatsend" value="back" class="btn" > -->

</form>

</div>
</div>
</body>
</html>
