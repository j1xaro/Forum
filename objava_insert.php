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

    $query1 = "SELECT * FROM objave WHERE  naslov_objave = '$naslov';";
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute();
    $row1 = $stmt1->fetch();
    $objava=$row1['id'];
    //header("Location: forum.php");



/*SHRANJEVANJE SLIKE*/    


$targetDir = "uploads/";
$allowTypes = array('jpg','png','jpeg','gif');

$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
if(!empty(array_filter($_FILES['files']['name']))){
   foreach($_FILES['files']['name'] as $key=>$val){
       // File upload path
       $fileName = basename($_FILES['files']['name'][$key]);
       $targetFilePath = $targetDir . $fileName;
       
       // Check whether file type is valid
       $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
       if(in_array($fileType, $allowTypes)){
           // Upload file to server
           if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
               // Image db insert sql
               $insertValuesSQL .= "('".$fileName."', NOW()),";
               if(!empty($insertValuesSQL)){
       $insertValuesSQL = trim($insertValuesSQL,',');
       // Insert image file name into database

        $query = "INSERT INTO slike (url,id_objava) VALUES (?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$fileName,$objava]);

       if($query){
           $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
           $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
           $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
           $statusMsg = "Files are uploaded successfully.".$errorMsg;
       }else{
           $statusMsg = "Sorry, there was an error uploading your file.";
       }
   }
           }else{
               $errorUpload .= $_FILES['files']['name'][$key].', ';
           }
       }else{
           $errorUploadType .= $_FILES['files']['name'][$key].', ';
       }
       
   }
   
   
}
header("Location: forum.php");
        }
else
{
    header("Location: forum.php");
}
?>