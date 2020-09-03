<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	$data = $_POST;
	
	// $query = "UPDATE users SET name='$nameuser',email='$emailuser',password='$password' WHERE id=$iduser";
	$query = update('posts',$data);
		setcookie('msg',"Update thành công",time()+5);
		header('location: posts.php');

?>