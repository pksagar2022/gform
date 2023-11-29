<?php
 // error_reporting(0);
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $dbname     = "registration_form";

   $conn = mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
   {
   	 //echo "connection ok";
   }
   else
   {
   	 echo "connection failed";
   }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>phpform</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
     <div class="container">
     	<form action="#" method="POST">
     	<div class="title">
     		Registration form
     	</div>
     	<div class="form">
     		<div class="input_file">
     			<label>First name</label>
     			<input type="text" class="input" name="fname" required>
     		</div>
     		<div class="input_file">
     			<label>Last name</label>
     			<input type="text" class="input" name="lname" required>
     		</div>
     		<div class="input_file">
     			<label>Password</label>
     			<input type="password" class="input" name="password" required>
     		</div>
     	     <div class="input_file">
     			<label>Conform password</label>
     			<input type="password" class="input" name="conpassword" required>
     		</div>
     		<div class="input_file">
     			<label>Gender</label>
     			<select class="selectbox" name="gender" required>
     				<option value="">select</option>
     				<option value="male">Male</option>
     				<option value="female">Female</option>
     				<option value="other">Other</option>
     			</select>
     		</div>
     		<div class="input_file">
     			<label>Email Address</label>
     			<input type="text" class="input" name="email" required>
     		</div>
     		<div class="input_file">
     			<label>Phone Number</label>
     			<input type="text" class="input" name="phone" required>
     		</div>
     		<div class="input_file">
     			<label>Address</label>
     			<textarea class="textarea" name="address" required></textarea>
     		</div>
     		<div class="input_file terms">
     			<label class="check">
     				<input type="checkbox" required>
     				<span class="checkmark"></span>
     			</label>
     			<p>Agree to term and conditions</p>
     		</div>
     		<div class="input_file">
     			<input type="submit" value="Register" class="btn" name="enter">
     		</div>
     	</div>
          </form>
     </div>
</body>
</html>
<!-- add php code -->
<?php
      if($_POST['enter'])
      {
     	$fname   = $_POST['fname'];
     	$lname   = $_POST['lname'];
     	$pwd     = $_POST['password'];
     	$cpwd    = $_POST['conpassword'];
     	$gender  = $_POST['gender'];
     	$email   = $_POST['email'];
     	$phone   = $_POST['phone'];
     	$address = $_POST['address'];

          if($fname != "" && $lname != "" && $pwd != "" && $gender != "" && $email != "" && $phone != "" && $address != "") 
          {
          	
          $query = "insert into student_form values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
     	$data = mysqli_query($conn,$query);

     	if($data)
     	{
     	    echo "Data inserted into Database"; 
          }
          else
          {
              echo "faild";
          }
     }
          else
          {
             echo "<script>alert('please fill the form first');</script>";
          }
     }

?>  
