<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	$data=$_POST;

	// $query = "INSERT INTO users(name,email,password) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."')";
	$query = insert('users',$data);
	// echo $query;
	// $result =$conn-> query($query);
	
		setcookie('msg','Thêm thành công!', time()+5);
		header('location:users.php');
	

?>