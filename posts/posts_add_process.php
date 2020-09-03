<?php
	include '../helper/sql.php';
	// var_dump($_POST);
	$data=$_POST;

	// $query = "INSERT INTO posts(title,description,content) VALUES ('".$data['title']."','".$data['description']."','".$data['content']."')";
	$query = insert('posts',$data);
	// echo $query;
	// $result =$conn-> query($query);
	
		header('location:posts.php');

?>