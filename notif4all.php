<?php
session_start();
require 'dbconfig/config.php';

$query = "select * from treatreq WHERE sender= '" . $username= $_SESSION['email'] . "' AND read_status='0'";
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

<label for="from">From: <?php echo  $row['reciever']?></label>
<label for="request"id="request">your request is :</label>

<br>
<label for="request"id="request"><?php echo  $row['approval']?></label>
<BR>

<!-- <label class="comment" for="textarea"><b>comment if there </b></label>
  <div class="comment">
    <textarea id="comment" id="textarea" name="comment"> </textarea>
  </div> -->

<input type="submit" name="ok" id="treatsend" value="ok" class="btn" >
<input type="submit" name="back" id="treatsend" value="Back" class="btn" >
<?php
if (isset($_POST['ok'])) {
  $query1 = "UPDATE treatreq SET read_status='1' WHERE sender= '" . $username= $_SESSION['email'] . "' AND read_status='0' LIMIT 1";
  $query_run1 = mysqli_query($con,$query1);
  header('location:notif4all.php');
}
if (isset($_POST['back'])) {
  $query1 = "select * from medical_organization WHERE E_Mail= '" . $username= $_SESSION['email'] . "'";
  $query_run1 = mysqli_query($con,$query1);
  $row1 = mysqli_fetch_assoc($query_run1);
  $page = $row1['Types'];

  switch ($page) {
    case 'Hospitals':
      header('location:hospital.php');
      break;
    case 'Investigation Lab':
      header('location:investigation lab.php');
      break;
      case 'Ray lab':
        header('location:Ray lab.php');
        break;
        case 'Pharmacy':
          header('location:pharmacy.php');
          break;
    default:
    header('location:index.php');

      break;
  }
}
 ?>
<!-- <input type="submit" name="signinbtn" id="treatsend" value="back" class="btn" > -->

</form>

</div>
</div>
</body>
</html>
