<?php
		include 'dbconnection.php';

		if(isset($_GET['delete_teacher'])){
			$delete = $_GET['delete_teacher'];
		
		$query ="select * from teacher_detail where tr_id = '$delete";
		$rs= mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($rs))
			{
				$image = $row['photo'];

			}
			unlink('teacher_image/'.$image);

		$sql = "delete from teacher_detail where tr_id='$delete' ";
		$run = mysqli_query($conn,$sql);
		if($run)
		{
			echo "<script>window.open('view_teachers.php?delete_msg= Data delete successfully','_self') </script>";
		}
	}
?>