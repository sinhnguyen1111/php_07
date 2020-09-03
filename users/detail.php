<?php
	include 'connect.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM users WhERE id=".$id;
	// echo $query;
	$result =$conn->query($query);
	$user = array();
	while($row = $result->fetch_assoc()){
		$user[]=$row;
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
		foreach ($user as $value) {?>
			<pre>
				<?php
					echo 'ID: '.$value['id'].'<br>';
					echo 'Họ tên: '.$value['name'].'<br>';
					echo 'Email: '.$value['email'].'<br>';
					echo 'Mật khẩu: '.$value['password'].'<br>';
					echo 'Ảnh đại diện: '.$value['avatar'].'<br>';
					echo 'Ngày tạo: '.$value['created_at'];
				?>
			</pre>
		<?php } ?>
	
</body>
</html>