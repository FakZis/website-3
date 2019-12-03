<?php
	require ('config/config.php');
	require ('config/db.php');

	// Abfrage / Query erstellen
	$query = 'SELECT * FROM posts';

	// Ergebnis abrufen
	$ergebnis = mysqli_query($conn, $query);

	// Daten abrufen - als Assoz. Array
	$posts = mysqli_fetch_all($ergebnis, MYSQLI_ASSOC);

	// Ergebnis befreien
	mysqli_free_result($ergebnis);

	// Verbindung beenden
	mysqli_close($conn);

	# print_r($posts);

?>

	<?php include('inc/header.php'); ?>
         
	<?php foreach($posts as $post) :  ?>
		<div class="post-group">
			<h3><?php echo $post['title']; ?></h3>
			<p> <?php echo $post['body']; ?></p>
			<small>Erstellt am: <?php echo $post['created_at']; ?> von <?php echo $post['author']; ?></small>
			<a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Mehr erfahren...</a>
		</div>
	<?php endforeach; ?>
		
	</div>
</body>
</html>