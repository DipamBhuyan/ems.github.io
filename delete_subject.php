<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $stmt = $dbh->prepare("Delete from subject where idsubject = $_POST[bid]");
	$stmt->execute();
    header("location:subject.php")

?>