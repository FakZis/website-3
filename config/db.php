<?php

   # 1. DB Verbindung
   # connection_string		server		 name	  pw	 db Name
   # $conn = mysqli_connect('localhost', 'root', '', 'phpBlog');
   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   # 2. Verbindung Prüfen
   if(mysqli_connect_errno()){
		// Fehlgeschlagen
		echo 'Verbingung zu MySql fehlgeschlagen'. mysqli_connect_errno();
   }

?>