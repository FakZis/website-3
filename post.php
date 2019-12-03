
<?php 
    require ('config/config.php');
    require ('config/db.php');

    // Sicherheitsfunktion
    $id = mysqli_real_escape_string ($conn, $_GET['id']);

    // Abfrage für einzelnen Post
    $query = "SELECT * FROM posts WHERE id = $id";

    // Ergebnis abrufen
    $ergebnis = mysqli_query($conn, $query);

    // Daten abrufen - direkt als assoc.array
    $post = mysqli_fetch_assoc($ergebnis);

    mysqli_free_result($ergebnis);
    mysqli_close($conn);

    print_r($post);
?>

<?php include ('inc/header.php'); ?>
<a href="<?php echo ROOT_URL;?>">Zurück</a>

<div class="post-group">
    <h2><?php echo $post['title']; ?></h2>
    <p><?php echo $post['body']; ?></p>
    <small>Erstellt am: <?php echo $post['created_at']; ?> von <?php echo $post['author'] ?></small>
</div>


    </div>
</body>
</html>