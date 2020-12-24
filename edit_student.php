<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Responsive Menu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- include font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script>
	jQuery(document).ready(function($){
		$('#toggler').click(function(event){
			{
			event.preventDefault();
			$('#wrap').toggleClass('toggled');
			}
		});
	});
</script>

	</head>
	<body>
		
		<div class="d-flex" id="wrap">
			<div class="sidebar bg-light border-light">
				<div class="sidebar-heading">
					<p class="text-center">Manage Students</p>
				</div>
				<ul class="list-group list-group-flush">
					<a href="main.php" class="list-group-item list-group-item-action">
						<i class="fa fa-vcard-o"></i>DashBoard</a>
						<a href="aaa_teacher.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Add Teacher Details</a>
						<a href="view_teachers.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>View Teacher Details</a>
						<a href="view_teachers.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Edit Teacher Details</a>
						<a href="add_student_details.php" class="list-group-item list-group-item-action">
						<i class="fa fa-user"></i>Add Student Details</a>
						<a href="view_student.php" class="list-group-item list-group-item-action">
						<i class="fa fa-eye"></i>View Student details</a>
						<a href="view_student.php" class="list-group-item list-group-item-action">
						<i class="fa fa-pencil"></i>Edit Student Details</a>
						<a href="index.php" class="list-group-item list-group-item-action">
						<i class="fa fa-sign-out"></i>LogOut</a>
				</ul>
			</div>

			<div class="main-body">
				<button class="btn btn-outline-light bg-danger mt-3 " id="toggler">
					<i class="fa fa-bars"></i>
				</button>

				<section id="main-form">
				  	

					<h2 class="text-center text-danger pt-3 font-weight-bold">Student Management Syatem</h2>
					<div class="container1 bg-danger" id="formsetting">
						<h3 class="text-center text-black pb-2 pt-2 font-weight-bold">Edit Student Details</h3>
						<hr>

						<?php
						if(isset($_GET['edit_student']))
						{
							$edit_st_id = $_GET['edit_student'];
							$query = "select * from student_detail where st_id='$edit_st_id'";
							$run = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($run))
							{

							
						?>





					<form method="post" action="" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-12 m-auto">
								<div class="form-group">
									<label class="text-white">First Name</label>
									<input type="text" name="fname" placeholder="Enter your first name" class="form-control" value="<?php echo $row['fname']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">Email</label>
									<input type="text" name="email" placeholder="Enter your Email address" class="form-control" value="<?php echo $row['email']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">Father Name</label>
									<input type="text" name="fathername" placeholder="Enter your father's name" class="form-control" value="<?php echo $row['father_name']; ?>">
								</div>

								<div class="form-group">
									<label class="text-white">Gender</label>
									<input type="radio" name="gender" value="male" class="form-check-input ml-2">
									<?php if($row['gender']=='male') echo "checked"; ?>
									<label class="text-white form-check-label pl-4">Male</label>
									<input type="radio" name="gender" value="female" class="form-check-input ml-2">
									<?php if($row['gender']=='female') echo "checked"; ?>
									<label class="text-white form-check-label pl-4">Female</label>
								</div>

								<div class="form-group">
									<label class="text-white">City</label>
									<input type="text" name="city" placeholder="Enter your City" class="form-control" value="<?php echo $row['city']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">Nationality</label>
									<input type="text" name="nation" placeholder="Enter your Nationality" class="form-control" value="<?php echo $row['nation']; ?>">
								</div>
							</div>
							<div class="col-md-5 col-sm-5 col-12 m-auto">
								<div class="form-group">
									<label class="text-white">Last Name</label>
									<input type="text" name="lname" placeholder="Enter your last name" class="form-control" value="<?php echo $row['lname']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">BirthDate</label>
									<input type="date" name="birthdate" placeholder="Enter your birthdate" class="form-control" value="<?php echo $row['birthdate']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">Mobile</label>
									<input type="text" name="mobile" placeholder="Enter your mobile Number" class="form-control" value="<?php echo $row['mobile']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">District</label>
									<input type="text" name="district" placeholder="Enter your district name" class="form-control" value="<?php echo $row['district']; ?>">
								</div>
								<div class="form-group">
									<label class="text-white">State</label>
									<input type="text" name="state" placeholder="Enter your state name" class="form-control" value="<?php echo $row['state']; ?>">
								</div>

								<div class="input-group">

									<div class="input-group-prepend"> <span class="input-group-text" id="inputgroupfileadd">Upload</span>
									</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="inputgroupfile01" aria-describedby="inputgroupfileadd" name="image">
										<label class="custom-file-label" for="inputgroupfile01"> Choose File</label>
									</div>
									<?php } } ?>
								</div>
								<input type="submit" name="update" value="update details" class="btn btn-success px-5 mt-2">
								 
							</div>

						</div>
					</form>
				</div>
				</section>
			</div>

		</div>
	</body>
</html>





<?php  
	 
	if(isset($_POST['update'])){
	
	$edit_st_id = $_GET['edit_student'];

	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$fathername = mysqli_real_escape_string($conn,$_POST['fathername']);
	$birthdate = mysqli_real_escape_string($conn,$_POST['birthdate']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$district = mysqli_real_escape_string($conn,$_POST['district']);
	$city = mysqli_real_escape_string($conn,$_POST['city']);
	
	$state = mysqli_real_escape_string($conn,$_POST['state']);
	$nation = mysqli_real_escape_string($conn,$_POST['nation']);
	$image = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];

	if(!$image_type == 'image/jpg' or !$image_type == 'image/png')
	{
		$match_err = "invalid Image Formate";
	}

		else if($image_size<= 2000)
		{
			$size_error = "Image size should be less then 2mb";
		}

		else
		
			move_uploaded_file($image_tmp, "student_image/$image");
			$sql = "update student_detail set fname='$fname', lname='$lname', email='$email', father_name='$fathername', birthdate='$birthdate', mobile='$mobile', gender='$gender', district='$district', city='$city', state='$state', nation='$nation', photo='$image' 
			where st_id='$edit_st_id' ";
			$run = mysqli_query($conn,$sql);

			if($run)
			{
				echo "<script>window.open('view_student.php?update_success=Student data updated successfully','_self')</script>";
			}
			else
			{
				echo "<script>window.open('view_student.php?update_error=Unable to update data. Please try again','_self')</script>";
			}
		
}

?>