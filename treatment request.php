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
<label for="org name"><?php echo $row['E_Mail'];   ?></label>
<br>

<label for="to">To</label>
<input  type="to" name="to" id="to" placeholder="insurance company name" class="txtfield"  autocomplete="off">

 <label class="comment" for="textarea"><b>Write your request</b></label>
  <div class="comment">
    <textarea id="comment" id="textarea" name="comment"></textarea>
  </div>

<input type="submit" name="send" id="treatsend" value="Send" class="btn" >
<input type="submit" name="back" id="treatsend" value="Back" class="btn" >
</form>
<?php
if (isset($_POST['send'])) {

$sender = $row['E_Mail'];
$reciever = $_POST['to'];
$comment = $_POST['comment'];

$query1 = "select * from insurance WHERE E_Mail= '$reciever'";
$query_run1 = mysqli_query($con,$query1);

if (mysqli_num_rows($query_run1) > 0) {

  $query1 = "insert into treatreq values('','$sender','$reciever','$comment','','','')";
  $query_run1 = mysqli_query($con,$query1);
echo '<script type="text/javascript"> alert("request sent") </script>';



}
else {
  echo '<script type="text/javascript"> alert("user does not exist") </script>';
}

header('location:treatment request.php');

}
if (isset($_POST['back'])) {

  $page = $row['Types'];

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
</div>
</div>
</body>
</html>
