<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $stmt = $dbh->prepare("Delete from branch where branch_id = $_POST[bid]");
	$stmt->execute();
    header("location:branch.php")

?>