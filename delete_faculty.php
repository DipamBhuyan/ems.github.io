<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $stmt = $dbh->prepare("Delete from faculty where idfaculty = $_POST[bid]");
	$stmt->execute();
    header("location:faculty.php")

?>