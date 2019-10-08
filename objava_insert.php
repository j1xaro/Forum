<?php
require_once './database.php';
session_start();
$podtema = $_POST['podtema'];
$naslov = $_POST['naslov'];
$text = $_POST['text'];
$uporabnik = $_SESSION['id'];

//preverim podatke, da so obvezi vnešeni
if (!empty($podtema) && !empty($naslov)
        && !empty($text) && !empty($uporabnik)) {
    
    $query = "INSERT INTO objave (id_podteme,id_uporabnik,naslov_objave,"
            . "text,datum_objave) "
            . "VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$podtema,$uporabnik,$naslov,$text,date("Y-m-d H:i:s")]);
    
    header("Location: forum.php");
}
else {
    //header("Location: forum.php");
}
?>