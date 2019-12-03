<?php
session_start();
require_once "database.php";
//care 
if (isset($_GET['kom']) && isset($_SESSION['id']) && isset($_GET['obj']) ){
$komentar = $_GET['kom'];
$objava = $_GET['obj'];

$query = "DELETE FROM komentarji WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$komentar]);
    header('Location:objava.php?obj='.$objava);
}
else {
    header("Location:forum.php");
}