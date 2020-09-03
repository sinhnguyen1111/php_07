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
$posts = select('posts');

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
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="posts_add.php" class="btn btn-primary">Add New users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>View_count</th>
            </thead>
            <?php foreach ($posts as $value) {?>

		        <tr>
		            <td><?php echo $value['id']?></td>
		            <td><?php echo $value['title']?></td>
		            <td><?php echo $value['description']?></td>
		            <td><?php echo $value['content']?></td>
		            <td><?php echo $value['view_count']?></td>
		            <td>
		                <a href="detail.php?id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
		                <a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
		                <a href="delete_posts.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
		            </td>
		        </tr>
        	<?php }?>
        </table>
    </div>
</body>
</html>
