<?php
require_once "database.php"; 
session_start();
$objava = $_GET['obj'];
$text = $_POST['text'];
if (isset($_SESSION['id']))
{

//First check if everything is filled in
if(!empty($objava) && !empty($text))
{
    $query = "INSERT INTO komentarji (id_uporabnik,komentar,datum_komentarja,"
            . "id_objava) "
            . "VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$_SESSION['id'],$text,date("Y-m-d H:i:s"),$objava]);
    $row = $stmt->fetch();
    header('Location:objava.php?obj='.$objava);
}

else
{
    header('Location:objava.php?obj='.$objava);
}
}
else
{
    header('Location:forum.php');
}
?>