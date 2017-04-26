<?php
session_start();
require 'dbconfig/config.php';
///asdasdasd

?>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="try.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="javascript/jquery.js"></script>
<script src="javascript/jquery.validate.js"></script>
<script type="text/javascript" src="javascript/javascript.js"></script>
<title>Login</title>
</head>
<body id="body_login">

   <div id="divwrapper">
    <div id="divheader"> <h1> Insurancy</h1></div>
          <div id="divLine"></div>
           <div id="divLinks">
           <div id="divNav">
                <ul>
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="services.html" >Services</a></li>
                    <li><a href="contact us.html">Contact us</a></li>
                    <li><a href="login.html"class="current">Log in</a></li>

                </ul>

            </div>




           </div>
   <marquee> Put your Ads here</marquee>

<section id="maincontent">
<div id="container">
<div id="tabbox">
<a href="#" id="signin" class="tab select">Sign in</a>
<a href="#" id="signup" class="tab signup">Sign up</a>
</div>
<div id="formpanel">

    <!-- goz2 el sign in -->
<div id="signinbox">
<form action="login.php" id="signinform" method="post">
<label for="username">Username</label>
<input type="username" name="username" id="username" class="txtfield"  autocomplete="off">
<label for="password">Password </label>
<input type="password" name="password" id="password" class="txtfield"  autocomplete="off">
<input type="submit" name="signinbtn" id="submitsignin" value="Sign in" class="btn" >
</form>
<?php
if (isset($_POST['signinbtn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


$query = "select * from patient WHERE E_MAIL='$username' AND USER_PASSWORD='$password'";
$query_run = mysqli_query($con,$query);

if (mysqli_num_rows($query_run)>0) {

$_SESSION['username']= $username;
  header('location:profile.php');

}
else {
   echo '<script type="text/javascript"> alert("Invalid username or password") </script>';
}


}



?>



</div>

      <!-- goz2 el sign up -->

<div id="signupbox">
<form action="login.php" id="signupform" method="post">
<label for="Firstname">First Name</label>
<input type="text" name="Fname" id="Fname" class="txtfield"  autocomplete="off">
    <label for="Lastname">Last Name</label>
<input type="text" name="Lname" id="Lname" class="txtfield"  autocomplete="off">

    <p>Enter you birthdate:</p>
<input type="date" name="bday" min="1950-01-02" max="2000-12-31"><br>
    <label for="phone">Phone</label>
<input type="phone" name="phone" id="phone" autocomplete="off"> <br>

<label for="newemail">Email Address</label>
<input type="email" name="newemail" id="newemail" class="txtfield"  autocomplete="off">
<label for="password1">Password</label>
<input type="password" name="password1" id="password1" class="txtfield"  autocomplete="off">
<label for="password2">Confirm Password</label>
<input type="password" name="password2" id="password2" class="txtfield" autocomplete="off"><br>

     <p> Choose your gender</p>
    <input type="radio" name="gender" value="male" class="radio" checked> Male<br>
  <input type="radio" name="gender" value="female" class="radio"> Female<br>

    <p id="type">Your type of insurance?</p>
    <input type="radio" name="individual" value="Individual" class="radio" checked> Individual<br>
  <input type="radio" name="insuredbycomapny" value="Insured by comapny" class="radio"> Insured by comapny<br>

    <p id="name">*Write the name of insurance company:</p>
    <label for="name"></label>
    <input type="name" id="name" class="txtfield">


    <input type="submit" name="registerbtn"  id="registerbtn" value="SIGN Up" class="btn">



</form>

<?php
if (isset($_POST['registerbtn'])) {

$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$gender = $_POST['gender'];
$bday = $_POST['bday'];
$phone = $_POST['phone'];
$username = $_POST['newemail'];
$password = $_POST['password1'];
$cpassword = $_POST['password2'];

if ($password == $cpassword) {
  $query = "select * from patient WHERE E_MAIL= '$username'";
  $query_run = mysqli_query($con,$query);

 if (mysqli_num_rows($query_run) > 0) {
   echo '<script type="text/javascript"> alert("user already exists") </script>';
 }
 else
 {
$query = "insert into patient values('','$fname','$lname','$password','$bday','','$gender','$username','$phone','','')";
$query_run = mysqli_query($con,$query);

 if ($query_run) {
    echo '<script type="text/javascript"> alert("User Registered") </script>';
  }
else {
  echo '<script type="text/javascript"> alert("Error") </script>';
}

 }

}
else {
  echo '<script type="text/javascript"> alert("password and confirm password does not match") </script>';
}

}



?>

</div>
</div>
</div>
    </div>
</section>   <footer id="footer_login">

               <div>
                   <p>Copy right 2017 &copy; All rights reserved to .. </p>
                    <img src="fb.png">
                    <img src="Linkedin.png">
                    <img src="twitter.png">

                </div>
                </footer>

</body>
</html>
