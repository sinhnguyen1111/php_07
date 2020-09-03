<?php
include '../helper/sql.php';
	// $id=$_GET['id'];
	$query = delete('posts');
	
	setcookie('msg','Xóa thành công',time()+5);
	
	header('location: posts.php');

	
?>