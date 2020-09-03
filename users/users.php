<?php
// 	$servername = 'localhost';
// 	$username='root';
// 	$password = '';
// 	$dataname = 'btvn_05';
// //Tạo kết nối
// 	$conn = new mysqli($servername,$username,$password,$dataname);
// 	// var_dump($conn);
// 	$query = "SELECT * FROM users ";
// 	// echo $query;
// 	$result = $conn->query($query);
// 	// var_dump($result);
// 	$users = array();
// 	while($row  = $result->fetch_assoc()){
// 		$users[]=$row;
// 	}
// 	// foreach ($users as $value) {
// 	// 	echo '<pre>';
// 	// 	print_r($value);
// 	// 	echo '</pre>';
// 	// }
include '../helper/sql.php';
$users = select('users');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if(isset($_COOKIE['msg'])){?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
			<?php echo $_COOKIE['msg']?>
		</div>
	<?php }?>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avatar</th>
            </thead>
            <?php foreach ($users as $value) {?>

		        <tr>
		            <td><?php echo $value['id']?></td>
		            <td><?php echo $value['name']?></td>
		            <td><?php echo $value['email']?></td>
		            <td><?php echo $value['password']?></td>
		            <td>
		                <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
		            </td>
		            <td>
		                <a href="detail.php?id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
		                <a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
		                <a href="delete_user.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
		            </td>
		        </tr>
        	<?php }?>
        </table>
    </div>
</body>
</html>
