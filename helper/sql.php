<?php
include_once 'connect.php';
function select($table){
	$query = "SELECT * FROM $table";
	// echo $query;
	$conn = connect();
	$result = $conn->query($query);
	// var_dump($result);
	$data = array();
	while($row  = $result->fetch_assoc()){
		$data[]=$row;
	}
	return $data;
}

function insert($table,$data){
	$query = "INSERT INTO $table";

	$string_1='';
	$string_2='';
	$i=0;
	foreach ($data as $column => $value) {
		$i++;
		$string_1.=$column;
		if($i!=count($data)){
		$string_1.=",";

		}

		$string_2 .="'".$value."'";
		if($i!=count($data)){
		$string_2.=",";

		}

	}
	$string = "(".$string_1.")". ' VALUES '."(".$string_2.")";
	$query = $query.$string;
	echo $query;
	$conn=connect();
	$result = $conn->query($query);

	// 
	return $result;
}

function update($table,$data){
	$query = "UPDATE $table SET ";
	$string_1='';
	$string_2='';

	$i=0;
	foreach ($data as $column => $value) {
		$i++;
		$string_1 .= $column."="."'".$value."'";
		if($i!=count($data)){
			$string_1 .= ",";

		}
		$string_2 = " WHERE id =".$data['id'];

	
	}
	$string = $string_1.$string_2;
	$query = $query.$string;
	// echo $query;
	$conn = connect();
	$result = $conn->query($query);

	return $result;
	// UPDATE categories SET name='vtv3',description='hsh',slug='tin-thoi-su-vtv3' WHERE categories.id=54
}

function delete($table){
	$id=$_GET['id'];
	$query = "DELETE FROM $table WHERE id=".$id;

	// $query = "DELETE FROM posts WHERE id=".$id;
	// echo $query;
	$conn = connect();
	$result =$conn->query($query);
	return $result;
}

// function detail($table,$data){
// 	$id=$_GET['id'];
// 	$query = "SELECT * FROM $table WHERE id=".$id;
// 	echo $query;
// 	$conn = connect();
// 	$result = $conn->query($query);
// 	// //tạo mảng 
// 	$data = array();
// 	while($row = $result->fetch_assoc()){
// 		$data[]=$row;
// 	}
// 	return $data;
// }
?>