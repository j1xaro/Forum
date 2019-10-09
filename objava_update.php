<?php
session_start();
require_once "database.php";
if (isset($_GET['obj']) && isset($_SESSION['id'])){
$objava = $_GET['obj'];
$text = $_POST['text'];
$query = "UPDATE objave SET text=? WHERE id = ?";

$stmt = $pdo->prepare($query);
$stmt->execute([$text,$objava]);
    header("Location:forum.php");
}
else {
    header("Location:forum.php");
}