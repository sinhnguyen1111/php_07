<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	$data = $_POST;
	$query = update('users',$data);
	
		setcookie('msg',"Update thành công",time()+5);
		header('location: users.php');

?>