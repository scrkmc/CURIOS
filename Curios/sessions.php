<?php
include('connect.php');
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];

$query=mysqli_query ($con,"SELECT * FROM students WHERE id ='$id'");
$row=mysqli_fetch_array($query);
$profile_picture=$row['profile_picture'];

?>