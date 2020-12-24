
<?php
session_start();
include 'dbconnection.php';
$email_error=$pwd_error=$success=$error='';
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$query = "select * from register where email= '$email'";
	$run = mysqli_query($conn, $query);
	$row = mysqli_num_rows($run);
	if($row>0){
		$email_error="This email id is already exists. Please try again with another one";
	}
	else if($password!==$cpassword){
		$pwd_error="Password does not match";
	}
	else{
		$sql="insert into register(fname, email, password, cpassword) values('$fname', '$email', '$pass', '$cpass')";
		$run=mysqli_query($conn, $sql);
		if($run)
		{
			$success="Registered Successfully";

		}
		else
		{
			$error="Unable to store data. Please try again";
		}
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Management System</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<script>
	function content1(){
		document.getElementById("div1").style.display="block";
		document.getElementById("div2").style.display="none";

      	}

	function content2(){
		document.getElementById("div1").style.display="none";
		document.getElementById("div2").style.display="block";

	}
</script>
    </head>
    <body>
       <section class="">
<!--             <p class="text-center text-warning font-weight-bold"><?php /*echo @$_SESSION['login_first']*/; ?></p>
 -->       		<h1 class="text-center text-danger pt-5 pb-4 font-weight-bold">Student Management System</h1>
       		<p class="text-center font-weight-bold text-danger"><?php echo @$_GET['error'] ?></p>
       		<div class="container" width="900" id="formsetting">
       			<h3 class="text-center text-primary py-3">Admin Login/Register Panel</h3>

       			<!-- row starts from here -->
       			<div class="row">
       				<div class="col-md-7 col-sm-7 col-12">
       					<img src="images/img2.png" class="img-fluid" alt="chania" width="650" height="550">
       				</div>
       				<div class="col-md-5 col-sm-5 col-12">

       					<button class="btn btn-info px-5" onclick="content1()">Register</button>
       					<button class="btn btn-info px-5" onclick="content2()">Login</button>
       					<!-- div1 starts from here -->

       					<div id="div1" style="display: block;" class="mt-3">
       					<form method="post" action="">
       						<div class="form-group">
       							<label calss="text-White">Full Name</label>
       							<input type="text" name="fname" placeholder="Enter your name" class="form-control" required="required">
       						</div>
       						<div class="form-group">
       							<label calss="text-white">Email</label>
       							<span class="float-right font-white font-weight-bold"> <?php echo $email_error; ?></span>
       							<input type="email" name="email" placeholder="Enter your mail" class="form-control" required="required">
       						</div>
       						<div class="form-group">
       							<label calss="text-white">Password</label>
       							<input type="password" name="password" placeholder="Enter password" class="form-control" required="required">
       						</div>
       						<div class="form-group">
       							<label calss="text-white">Confirm Password</label>
       							<span class="float-right font-white font-weight-bold"><?php echo $pwd_error; ?></span>
       							<input type="password" name="cpassword" placeholder="confirm Your password" class="form-control" required="required">
       						</div>
       						<input type="submit" name="submit" value="register" class="btn btn-success px-5">
       						<span class="float-right font-white font-weight-bold"><?php echo $success; echo $error; ?></span>

       					</form>
       					</div>
       					<!-- div1 ends here -->

       					<!-- div2 starts from here -->

       					<div id="div2" style="display: none;" class="mt-4">
       						<form method="post" action="">
       						
       						<div class="form-group">
       							<label calss="text-white">Email</label>
       							<input type="email" name="email" placeholder="Enter your mail" class="form-control">
       						</div>
       						<div class="form-group">
       							<label calss="text-white">Password</label>
       							<input type="password" name="password" placeholder="Enter password" class="form-control">
       						</div>
       						<input type="submit" name="submit1" value="Login" class="btn btn-success px-5">

       					</div>
       					
       				</div>
       				<!-- div2 ends here -->
       			</div>
       			<!-- row ends here -->

       		</div>
       </section> 
    </body>
</html>

<?php

	if(isset($_POST['submit1']))
	{
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		$sql = "select * from register where email = '$email'";
		$run = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($run);

		$pwd_fetch= $row['password'];
		$pwd_decode = password_verify($pwd,$pwd_fetch);

		if($pwd_decode){
			echo "<script>window.open('main.php?success=Loggedin successfully', '_self')</script>";
		}
	
	else
	{
		echo "<script>window.open('index.php?error=Username or password is incorrect', '_self')</script>";
	}
}
?>