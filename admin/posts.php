<?php
require_once '../config.php';
$sql = "SELECT * FROM blog_post ORDER BY id DESC;";
$query = $pdo->prepare($sql);
$query->execute();
$blogPost = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog with Me</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			
			<div class="col-sm-8">
				<h2>
					Post
				</h2>
				<a href="../index.php" class="btn btn-secondary">Home</a>
				<a href="insert-post.php" class="btn btn-primary">New Post</a>
				<table class="table">
					<thead>
						<th>Title</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>

						<?php
						foreach($blogPost as $item){
							echo '<tr>';
							echo '<td>'.$item['titulo'].'</td>';
							echo '<td>Edit</td>';
							echo '<td>Delete</td>';
							echo '</tr>';
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quidem atque facere libero, laboriosam amet iste aut ab est dicta temporibus rem, esse saepe, repudiandae aperiam assumenda a, quis excepturi.
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<footer>
					This is a footer <br>
					<a href="admin/index.php">Admin Panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>