<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	$data = $_POST;
	// $query = "INSERT INTO categories(name,description,slug) VALUES ('".$data['name']."','".$data['description']."','".$data['slug']."')";
	// echo $query;
	$query = insert('categories',$data);
		
		setcookie('msg','Thêm thành công',time()+5);
		header('location: categories.php');
	
	
?>