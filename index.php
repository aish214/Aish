<?php
ob_start();
include("dbConnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="image/ex.png" type="image/x-icon">
<title>Rozgar Map Exam Registration || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}

	function fileValidation() { 
            var fileInput =  
                document.getElementById('fil'); 
              
            var filePath = fileInput.value; 
          
            // Allowing file type
			 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                alert('Please Upload a valid Image File'); 
                fileInput.value = ''; 
                return false; 
            }  
		}

</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-8">
<span class="logo">Rozgarmap Exam Registration</span></div>
<!--<div class="col-md-2 col-md-offset-2">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>-->
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="mail"></label>  
  <div class="col-md-6">
  <input id="email" name="mail" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" enctype="multipart/form-data" action="sign.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label> 
   <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" autocomplete="off" type="text">
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="fname"></label> 
   <div class="col-md-12">
  <input id="fname" name="fname" placeholder="Enter your Father Name" class="form-control input-md" autocomplete="off" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="con"></label> 
   <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your Mobile Number" autocomplete="off" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" autocomplete="off" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="cname"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your school/college name" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qual"></label>  
  <div class="col-md-12">
  <input id="qual" name="qual" placeholder="Enter your Highest Qualification" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="passyr"></label>  
  <div class="col-md-12">
  <input id="passyr" name="passyr" placeholder="Enter your Passing Year" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" autocomplete="off" required class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="dob"></label>
  <div class="col-md-12">
    <input id="dob" name="dob" placeholder="Enter your Date of Birth" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="add"></label>
  <div class="col-md-12">
    <input id="add" name="add" placeholder="Enter your Address" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="adhar"></label>
  <div class="col-md-12">
    <input id="adhar" name="adhar" placeholder="Enter your Aadhar Number" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12control-label" for="know"></label>
  <div class="col-md-12">
    <input id="comp" name="comp" placeholder="Basic Knowlwdge of Computer(Yes/No)" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-12control-label" for="jobloc"></label>
  <div class="col-md-12">
    <input id="job" name="job" placeholder="Preferable Location for Job" autocomplete="off" required class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
	<label class="col-md-12control-label" for="jobloc">Upload Your Photo</label>
  <div class="col-md-12">
    <input id="fil" name="file" placeholder="" class="form-control input-md" onchange="return fileValidation()" required type="file">
    File size should not be greater than 50kb.
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" name="sub" class="sub" value="Register" class="btn btn-primary"/>
  </div>
</div>

<!--<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="button" class="sub" value="Pay Fee@50Rs. After Registration" class="btn btn-primary"/>
  </div>
</div>
-->
</fieldset>
								  
											        
                                                    
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/aish.jpg" width=100 height=100 alt="Ashwani Kumar" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Ashwani Kumar</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9041637413</h4>
		<h4 style="font-family:'typo' ">rsashwani5@gmail.com</h4>
		<h4 style="font-family:'typo' ">Eureka-Electrosoft Pvt. Ltd. Mohali(chd).</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
