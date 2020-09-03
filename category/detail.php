<?php
include '../helper/sql.php';

	$id=$_GET['id'];
	$query = "SELECT * FROM categories WHERE id=$id";
	$conn = connect();
	$result = $conn->query($query);
	// //tạo mảng 
	
	// $query = detail('categories',$data);
	$categories = array();
	while($row = $result->fetch_assoc()){
		$categories[]=$row;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		body{
			width: 50%;
			margin:0 auto;
		}
	</style>
</head>
<body>
	<h2>--- THÔNG TIN NGƯỜI DÙNG ---</h2>
		<?php
		foreach ($categories as $value) {?>
		<pre>
			<?php
				echo 'ID: '.$value['id'].'<br>';
				echo 'Tên : '.$value['name'].'<br>';
				echo 'Mô tả : '.$value['description'].'<br>';
				echo 'Slug: '.$value['slug'].'<br>';
				echo 'Avatar: '.$value['thumbnail'].'<br>';
				echo 'Ngày tạo : '.$value['created_at'];
			?>
		</pre>
			<?php } ?>
</body>
</html>