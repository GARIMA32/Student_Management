<!--<?php

/*include 'dbconnection.php';
session_start();
if(!$_SESSION['email'])
{
	$_SESSION['login_first']="Please Login First!";
	header('Location:index.php');
}*/
?> -->

<!DOCTYPE html>
<html>
	<head>
		<title>Responsive Menu</title>

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
					<h3 class ="text-center text-success"><?php echo @$_GET['success']; ?></h3>
					<h2 class="text-center text-danger pt-3 font-weight-bold">Student Management Syatem</h2>
					<div class="container1 bg-danger" id="formsetting">
						<h3 class="text-center text-black pb-2 pt-2 font-weight-bold">Welcome to Deshboard</h3>
						<hr>

						<div class="row">
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="aaa_teacher.php" class="text-white text-center">
									<i class="fa fa-user"></i>
									<h3>Add Teacher Details</h3>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="view_teachers.php" class="text-white text-center">
									<i class="fa fa-eye"></i>
									<h3>View Teacher Details</h3>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="view_teachers.php" class="text-white text-center">
									<i class="fa fa-pencil"></i>
									<h3>Edit Teacher Details</h3>
								</a>
							</div>
						</div>
						
						<hr>

						<div class="row">
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="add_student_details.php" class="text-white text-center">
									<i class="fa fa-user"></i>
									<h3>Add Student Details</h3>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="view_student.php" class="text-white text-center">
									<i class="fa fa-eye"></i>
									<h3>View Student Details</h3>
								</a>
							</div>
							<div class="col-md-4 col-sm-4 col-12 m-auto icon">
								<a href="edit_student.php" class="text-white text-center">
									<i class="fa fa-pencil"></i>
									<h3>Edit Student Details</h3>
								</a>
							</div>
						</div>

					</div>
				</section>
			</div>

		</div>
	</body>
</html>