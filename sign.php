<form class="form-horizontal" name="form" enctype="multipart/form-data" action=""  method="POST">
<?php
ob_start();
include("dbConnection.php");
if(isset($_POST['sub']))

{

              $name=$_REQUEST['name'];
			 
			  $fn=$_REQUEST['fname'];
			  
			  $mob=$_REQUEST['mob'];
			  
			  $gen=$_REQUEST['gender'];
			  
			  $col=$_REQUEST['college'];
			  
			  $qual=$_REQUEST['qual'];
			  
			   $dob=$_REQUEST['dob'];
			  
			  $passyr=$_REQUEST['passyr'];
			  
			  $email=$_REQUEST['email'];
			  
			  $add=$_REQUEST['add'];
			  
			  $adhar=$_REQUEST['adhar'];
			  
			  $comp=$_REQUEST['comp'];
			  
			   $job=$_REQUEST['job'];
			   
			    //$cen=$_REQUEST['file'];
			  
			  //$bg=$_REQUEST['bg'];
			  
			  //$badge=$_REQUEST['badge'];
			  
			  $filename=$_FILES['file']['name'];
			  $filetype=$_FILES['file']['type'];
			  $filesize=$_FILES['file']['size'];
			  $filetmp=$_FILES['file']['tmp_name'];
			  $size=2000000;
			  $len=10;
			  
			  //$d1=$_REQUEST['d1'];
			  date_default_timezone_set("Asia/Calcutta");
			  
              $date=date("Y-m-d");
			  
			  $time=date("H:i:s");
			  
			  $myuid = mt_rand(1000,6000);
			  
			  $pic=$myuid.$filename;
			  
			  
			  $sql ="select * from user where adhar='$adhar'";
				
				$exe=mysql_query($sql);
				
				$re=mysql_fetch_array($exe);
				
              $rows=mysql_num_rows($exe);
			  
			  
			  
			  //$_SESSION['d1'];
				
			if($rows>0)
				
			{
					
					echo "<script>alert('Aadhar Number Already Exist')</script>";
					echo"<script>location.href='index.php'</script>";
			}
			
			else
			  {
				  
			  move_uploaded_file($filetmp,"image/$pic");
			  			 
   
		 $res =mysql_query("insert into user(name,fname,mob,adhar,addr,email,gender,college,dob,user_id,qual,job,comp,passyr,file,entrydate,entrytime) values ('$name','$fn','$mob','$adhar','$add','$email','$gen','$col','$dob','$myuid','$qual','$job','$comp','$passyr','$pic','$date','$time')");
		 
		 
			  
			 if($res)
			{
				
	 echo "<script>alert('Dear Candidate Your Registration Id Is = ' +'$myuid' +' and Your Password is Your Date of Birth. Please note Down your Registration ID and Password for Next Process. Your Registration Will be Done after pay the fee.' )</script>";
			echo"<script>location.href='https://forms.gle/Dezwyfn3229jwRXw9'</script>";
			}
			else
			{
			die(mysql_error());
			}
			  
			  
			  }
			  }


?> 
</form> 



		
        
        
        
			                 