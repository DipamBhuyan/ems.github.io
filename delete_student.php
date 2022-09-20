<?php

    $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', 'password');
    $stmt = $dbh->prepare("Delete from student where idstudent = $_POST[bid]");
	$stmt->execute();
    header("location:student.php")

?>