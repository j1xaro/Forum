<?php
require_once './database.php';

$tema = $_POST['tema'];
$opis = $_POST['opis'];

//preverim podatke, da so obvezi vnešeni
if (!empty($tema)) {
    
    $query = "INSERT INTO teme (naslov_teme) "
    . "VALUES (?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$tema]);
    
    header("Location: tema_add.php");
}
else {
   header("Location: tema_add.php");
}
?>