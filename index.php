<?php
require_once 'config.php';
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

				<?php
				foreach($blogPost as $item){
					echo '<div class="blog-post">';
					echo '<h2>'. $item['titulo'] .'</h2>';
					echo '<p>Jan 17 2019 by <a href="">Alex</a></p>';
					echo '<div class="blog-post-image">';
					echo '<img src="images/blog1.jpg" alt="">';
					echo '</div>';
					echo '<div class="blog-post-content">';
					echo $item['contenido'];
					echo '</div>';
					echo '</div>';
				}
				?>
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
