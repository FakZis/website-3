<?php
	require ('config/config.php');
	require ('config/db.php');
?>


<?php include('inc/header.php');?>
<h1>Add Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
		
		</div> <!-- container ende -->
</body>
</html>