<?php
require_once './database.php';

$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$email = $_POST['email'];
$naslov = $_POST['naslov'];
$birthday = $_POST['birthday'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
//preverim podatke, da so obvezi vnešeni
if (!empty($ime) && !empty($priimek)
        && !empty($email) && !empty($naslov)
        && !empty($pass1)
        && ($pass1 == $pass2)) {
    
    //$pass = sha1($pass1.$salt);
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    
    $query1 = "SELECT email FROM uporabniki WHERE email=?";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute([$email]);

if ($stmt1->rowCount()>0)
{ 
    
    header("Location:register.php?x=1");
} 
  
 else { 
    $query = "INSERT INTO uporabniki (ime,priimek,naslov,email,"
            . "pass,birthday) "
            . "VALUES (?,?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime,$priimek,$naslov,$email,$pass,$birthday]);
    
    header("Location: login.php");
 }
}
else {
    header("Location: registration.php");
}
?>