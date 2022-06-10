<?php
	session_start();
	require_once 'classes/db.php';

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM categories WHERE cat_id='$id'";
		if(mysqli_query($con, $sql)){
			header('location:category.php');
		}
	}else{
		header('location: category.php');
	}
?>