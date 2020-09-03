<?php
include '../helper/sql.php';
	// $id=$_GET['id'];
	$query = delete('users');
	setcookie('msg','Xóa thành công',time()+5);
	
	header('location: users.php');

	
?>