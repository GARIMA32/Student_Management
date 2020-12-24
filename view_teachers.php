<!-- <?php  
	 
	/*include 'dbconnection.php';
	session_start();
if(!$_SESSION['email'])
{
	$_SESSION['login_first']="Please Login First!";
	header('Location:index.php');
}*/


?> -->

<?php
 include 'dbconnection.php';
 ?>

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
					 <h3 class ="text-center text-success"><?php echo @$_GET['update_success']; echo @$GET['update_error']; echo @$_GET['delete_msg']; ?></h3> 
					<h2 class="text-center text-danger pt-3 font-weight-bold">Student Management Syatem</h2>
					<div class="container1 bg-danger" id="formsetting">
						<h3 class="text-center text-black pb-2 pt-2 font-weight-bold">View Teacher Detail</h3>
						<hr>

						<div class="row">
							<div class="col-md-12 col-sm-12 col-12">
								<table class="table table-bordered text-white table-responsive">
									<thead>
										<tr>
											<th>SNo.</th>
											<th>FirstName</th>
											<th>LastName</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Gender</th>
											<th>District</th>
											<th>City</th>
											<th>State</th>
											
											<th>Nation</th>
											<th>Photo</th>
											<th>Action</th>
										</tr>
									</thead>
									
									<?php
									$sql = "select * from teacher_detail"; 
									$run = mysqli_query($conn, $sql);

									$i=1;
									while($row = mysqli_fetch_assoc($run))
									{


									?>
										<tbody>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $row['fname']; ?></td>
												<td><?php echo $row['lname']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['mobile']; ?></td>
												<td><?php echo $row['department']; ?></td>
												<td><?php echo $row['subject']; ?></td>
												<td><?php echo $row['gender']; ?></td>
												<td><?php echo $row['district']; ?></td>
												<td><?php echo $row['city']; ?></td>
												<td><?php echo $row['state']; ?></td>
												
												<td><?php echo $row['nation']; ?></td>
												<td>
													<a style="color:white; text-decoration: none" href="teacher_image/<?php echo $row['photo']; ?>">
														<img src="teacher_image/<?php echo $row['photo']; ?>" width="50" height="50"></a>
												</td>
												 <td>
													<a style="text-decoration: none; font-weight: bold; color:blue;"  href="edit_teacher_detail.php?edit_teacher=<?php echo $row['tr_id']; ?>"><ins>Edit</ins></a>
													<a style="text-decoration: none; font-weight: bold; color:blue;" href="delete_teacher.php?delete_teacher=<?php echo $row['tr_id']; ?>"><ins>Delete</ins></a>
												</td> 
											</tr>
										</tbody>
										<?php } ?>
								</table>
							</div>
						</div>

					</div>
				</section>
			</div>

		</div>
	</body>
</html>
