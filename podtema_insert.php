<?php
require_once './database.php';

$podtema = $_POST['podtema'];
$tema = $_POST['tema'];
$opis = $_POST['opis'];

//preverim podatke, da so obvezi vnešeni
if (!empty($podtema) && !empty($tema)) {
    
    $query = "INSERT INTO podteme (id_tema,naslov_podteme) "
            . "VALUES (?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$tema,$podtema]);
    
    header("Location: podtema_add.php");
}
else {
    header("Location: podtema_add.php");
}
?>