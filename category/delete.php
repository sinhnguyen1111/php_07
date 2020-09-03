<?php
include '../helper/sql.php';
	// $id=$_GET['id'];
	$query = delete('categories');
	// echo $query;
		setcookie('msg','Xóa thành công',time()+5);
		header('location: categories.php');
	
?>