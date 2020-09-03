<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	// $id = $_GET['id'];
	$data = $_POST;
	$query = update('categories',$data);
	// $conn = connect();
	// $result = $conn->query($query);

		setcookie('msg','Update thành công!',time()+5);
		header('location: categories.php');
	
?>
