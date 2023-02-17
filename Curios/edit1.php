<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CURIOS</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$fname = $_POST['proj_title'];
		    $lname = $_POST['proponents'];
			$mname = $_POST['fund_source'];
			$address = $_POST['proj_duration'];
			$fnds = $_POST['funds'];
			$sctr = $_POST['sector'];
			$comment = $_POST['comment'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE people set proj_title ="'.$fname.'",
					proponents ="'.$lname.'", fund_source ="'.$mname.'",
					proj_duration ="'.$address.'",funds_alloc ="'.$fnds.'",sector ="'.$sctr.'", 
					comment="'.$comment.'" WHERE
					people_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "dashboard.php";
		</script>
 </body>
</html>