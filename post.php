<?php
	require_once('config/config.php');
	require('config/db.php');
	
	// Lösch-Formular verarbeiten
	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		
		// Delete-Query
		$query = "DELETE FROM posts WHERE id = {$delete_id}";
		
		// query prüfen & ausführen
		if(mysqli_query($conn,$query)){
			// erfolg
			header('Location: '.ROOT_URL);
		}else{
			echo 'ERROR: '.mysqli_error($conn);
		}
		
	}
	
	// Sicherheitsfunktion
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	
	// Abfrage für einzelnen Post
	$query = "SELECT * FROM posts WHERE id = $id";
    
    //test

	// Ergebnis abrufen
	$ergebnis = mysqli_query($conn,$query);
	
	// Daten abrufen - direkt als assoc.array
	$post = mysqli_fetch_assoc($ergebnis);
	
	mysqli_free_result($ergebnis);
	mysqli_close($conn);
	
	# print_r($post);

?>

<?php include('inc/header.php');?>
<a href="<?php echo ROOT_URL;?>">Zurück</a>

<div class="post-group">
	<h2><?php echo $post['title'];?></h2>
	<p><?php echo $post['body'];?></p>
	<small>Erstellt am: <?php echo $post['created_at'];?> von <?php echo $post['author'];?></small>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
		<input type="submit" name="delete" value="Löschen">
	</form>

</div>








</div> <!-- container ende -->
</body>
</html>