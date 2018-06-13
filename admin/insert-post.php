<?php
require_once '../config.php';
$result = false;
if(!empty($_POST)){
	$sql = "INSERT INTO blog_post (titulo, contenido) VALUES (:title, :content)";
	$query = $pdo->prepare($sql);
	$result = $query->execute([
		'title'=> $_POST['title'],
		'content'=> $_POST['content']
	]);
}
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
				<h2>New Post</h2>
				<a href="posts.php" class="btn btn-info">Back</a>
				<?php
					if($result){
						echo '<div class="alert alert-success">Post Saved</div>';
					}
				?>
				<form action="insert-post.php" method="post">
					<div class="form-group">
						<label for="inputTitle">
							Title:
						</label>
						<input type="text" class="form-control" name ="title" id="inputTitle">
						<textarea class="form-control" name="content" id="inputContent"  rows="5"></textarea>
						<br>
						<input class= "btn btn-primary" type="submit" value="Save">
					</div>
				</form>
				
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
