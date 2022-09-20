<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $stmt = $dbh->prepare("Delete from room where idroom = $_POST[bid]");
	$stmt->execute();
    header("location:room.php")

?>