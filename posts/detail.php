<?php
	include '../helper/connect.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM posts WhERE id=".$id;
	// $query = detail('posts',$data);
	// echo $query;
	$conn = connect();
	$result =$conn->query($query);
	$posts = array();
	while($row = $result->fetch_assoc()){
		$posts[]=$row;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>--- THÔNG TIN NGƯỜI DÙNG ---</h3>
	<?php
		foreach ($posts as $value) {?>
			<pre>
				<?php
					echo 'ID: '.$value['id'].'<br>';
					echo 'Họ tên: '.$value['title'].'<br>';
					echo 'Email: '.$value['description'].'<br>';
					echo 'Mật khẩu: '.$value['content'].'<br>';
					echo 'Ảnh đại diện: '.$value['view_count'].'<br>';
					echo 'Ngày tạo: '.$value['created_at'];
				?>
			</pre>
		<?php } ?>
	
</body>
</html>