<html>
<head profile="http://www.w3.org/2005/10/profile">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/try.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="javascript/jquery.js"></script>
<script src="javascript/jquery.validate.js"></script>
<script type="text/javascript" src="javascript/javascript.js"></script>
<title>Login</title>
<link rel="icon"  type="image/png"  href="login.png">
</head>

    <body id="body_login">


<div id="container">
<div id="tabbox">
<a href="#" id="signin" class="tab select">Sign in</a>
<a href="#" id="signup" class="tab signup">Sign up</a>
</div>
<div id="formpanel">

    <!-- goz2 el sign in -->
<div id="signinbox">
<form action="#" id="signinform"method="post">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="txtfield"  autocomplete="off">
<label for="password">Password </label>
<input type="password" name="password" id="password" class="txtfield"  autocomplete="off">
<input type="submit" name="signinbtn" id="submitsignin" value="Sign in" class="btn" >
</form>
</div>

      <!-- goz2 el sign up -->

<div id="signupbox">
<form action="#" id="signupform"method="post">
<label for="Firstname">First Name</label>
<!--<input type="text" name="Fname" id="Firstname" class="txtfield"   maxlength="10" autocomplete="off">-->
    <input pattern=".{3,}"   id="Fname" maxlength="10" required title="This field is required">
    <label for="Lastname">Last Name</label>
<input pattern=".{3,}"   id="name" maxlength="10" required title="This field is required">

     <label for="Med ID">Medical ID</label>
<input type="text" name="Med ID" placeholder="Medical organization ID" id="Med ID" class="txtfield"  autocomplete="off">

    <label  for="selectbasic">If you are medical organization:</label>
    <select  name="medical-org" >
      <option value="1">Hospitals</option>
      <option value="2">Pharmacy</option>
        <option value="1">Investigation Lab </option>
      <option value="2">Ray lab</option>
         <option value="2">insurance company</option>
    </select>

    <p>Enter you birthdate:</p>
<input type="date" name="bday" max="1990-01-02" min="1950-12-31"><br>

    <label for="adress">Address</label>
<input type="address" name="address" id="address" autocomplete="off"> <br>

    <label for="phone">Phone</label>
<input type="phone" name="phone" id="phone" autocomplete="off"> <br>

    <label for="fax"> Fax </label>
<input type="fax" name="fax" id="fax" autocomplete="off"> <br>

<label for="newemail">Email Address</label>
<input type="email" name="newemail" id="newemail" class="txtfield" placeholder="ex:abc@gmail.com"  autocomplete="off">
<label for="password1">Password</label>
<input type="password" name="password1" id="password1" class="txtfield"  autocomplete="off">
<label for="password2">Confirm Password</label>
<input type="password" name="password2" id="password2" class="txtfield" autocomplete="off"><br>


  <label  for="selectbasic">Gender</label>
    <select  name="gender" >
      <option value="1">Male</option>
      <option value="2">Female</option>
    </select>

     <label  for="insurance">insured by:</label>
    <label for="insurance">
      <input type="radio" name="insurance" id="insurance-0" value="1">
      individual
    </label>

  <div class="checkbox">
    <label for="insurance">
      <input type="radio" name="insurance" id="insurance-1" value="2">
      company
    </label>

    <p id="insurancename">*Write the name of company you work for:</p>
    <label for="name"></label>
    <input type="name" name ="insurancename" id="name" class="txtfield">

      <p id="insurancename">*Write the name of insurance company:</p>
    <label for="name"></label>
    <input type="name" placeholder="for ex: unicare" name ="insurancename" id="name" class="txtfield">


    <input type="submit" name="registerbtn"  id="registerbtn" value="Sign up" class="btn">

</div>

</form>
</div>
</div>
</div>
    </div>
</body>
</html>
