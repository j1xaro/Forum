<?php
session_start();
require_once "database.php";
if (isset($_SESSION['id'])){
$uporabnik = $_SESSION['id'];
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$naslov = $_POST['naslov'];
$email = $_POST['email'];
$bday = $_POST['bday'];
$query = "UPDATE uporabniki SET ime=?,priimek=?,naslov=?,email=?,birthday=? WHERE id = ?";

$stmt = $pdo->prepare($query);
$stmt->execute([$ime,$priimek,$naslov,$email,$bday,$uporabnik]);
    header("Location:nastavitve.php");
}
else {
    header("Location:index.php");
}