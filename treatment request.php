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

    <form action="#" id="request"method="post">


     <div id="treat_req">

<label for="from">From</label>
<input  type="from" name="from"  id="from" placeholder="your organization name" class="txtfield"  autocomplete="off">

<br>

<label for="to">To</label>
<input  type="to" name="to" id="to" placeholder="insurance company name" class="txtfield"  autocomplete="off">

 <label class="comment" for="textarea"><b>Write your request</b></label>
  <div class="comment">
    <textarea id="comment" id="textarea" name="comment"></textarea>
  </div>

<input type="submit" name="signinbtn" id="treatsend" value="Send" class="btn" >
</form>

</div>
</div>
</body>
</html>
