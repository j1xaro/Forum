<?php
session_start();
require_once "database.php";
if (isset($_GET['obj']) && isset($_SESSION['id'])){
$objava = $_GET['obj'];

$query1 = "DELETE FROM komentarji WHERE id_objava = ?";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$objava]);
$query = "DELETE FROM objave WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$objava]);

    header("Location:forum.php");
}
else {
    header("Location:forum.php");
}