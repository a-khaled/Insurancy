<?php
session_start();
require 'dbconfig/config.php';

$query = "select * from medical_organization WHERE E_Mail= '" . $username= $_SESSION['email'] . "'";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);

 ?>


<html>
 <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/web.css">
<title>Treatment Request</title>

</head>

<body class="treat">
<div class="container">
<img src="images/msg.jpg">

    <form action="treatment request.php" id="request"method="post">


     <div id="treat_req">

<label for="from">From</label>
<!-- <input  type="from" name="from"  id="from" placeholder="your organization name" class="txtfield"  autocomplete="off"> -->
<label for="org name"><?php echo $row['Full_Name'];   ?></label>
<br>

<label for="to">To</label>
<input  type="to" name="to" id="to" placeholder="insurance company name" class="txtfield"  autocomplete="off" required title="This field is required">

 <label class="comment" for="textarea"><b>Write your request</b></label>
  <div class="comment">
    <textarea id="comment" id="textarea" name="comment" required title="This field is required"></textarea>
  </div>

<input type="submit" name="send" id="treatsend" value="Send" class="btn" >
</form>
<?php
if (isset($_POST['send'])) {

$sender = $row['Full_Name'];
$reciever = $_POST['to'];
$comment = $_POST['comment'];

$query = "select * from insurance WHERE Full_Name= '$reciever'";
$query_run = mysqli_query($con,$query);

if (mysqli_num_rows($query_run) > 0) {

  $query = "insert into treatreq values('','$sender','$reciever','$comment','')";
  $query_run = mysqli_query($con,$query);
echo '<script type="text/javascript"> alert("request sent") </script>';



}
else {
  echo '<script type="text/javascript"> alert("user does not exist") </script>';
}



}

 ?>
</div>
</div>
</body>
</html>
