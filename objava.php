<!DOCTYPE html>
<html lang="en">

<?php

session_start();
    require_once "database.php";  
    $objava = $_GET['obj'];
    $query1 = "SELECT * FROM objave where id=".$objava;
    $stmt1 = $pdo->prepare($query1);
    $stmt1->execute();
    
    $queryx = "SELECT * FROM objave where id=".$objava;
    $stmtx = $pdo->prepare($queryx);
    $stmtx->execute();
    $rowx = $stmtx->fetch();
  

   /* $query2 = "SELECT * FROM uporabniki where id=". $row1['id_uporabnik'];
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $row2 = $stmt2->fetch();*/
if (isset($_SESSION['id'])){
    

    $query = "SELECT * FROM uporabniki where id = ".$_SESSION['id'];
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch();
    if ($_SESSION['admin'] == "admin"){ ?>
    
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Objava</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  

</head>

<body id="page-top">
<div id='myModal' class='modal'>
    <span class='close'>&times;</span>
    <img class='modal-content' id='img01'>
    <div id='caption'></div>
  </div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Meni
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="pravila.php">Pravila</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="odjava.php">Odjava</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        
        
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Naslov</th>
      <th scope='col'>Tema</th>
      <th scope='col'>Podtema</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Objavljeno&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Objavil</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $number=1;
      while($row1 = $stmt1->fetch())
{
  
  $query2 = "SELECT * FROM podteme where id=".$row1['id_podteme'];
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $row2 = $stmt2->fetch();

    $query3 = "SELECT * FROM teme where id=".$row2['id_tema'];
    $stmt3 = $pdo->prepare($query3);
    $stmt3->execute();
    $row3 = $stmt3->fetch();

    $query4 = "SELECT * FROM uporabniki where id=". $row1['id_uporabnik'];
    $stmt4 = $pdo->prepare($query4);
    $stmt4->execute();
    $row4 = $stmt4->fetch();
    $queryz = "SELECT * FROM slike where id_objava=". $row1['id'];
    $stmtz = $pdo->prepare($queryz);
    $stmtz->execute();
    
      
      echo "
    <tr>
      <th scope='row'>".$number."</th>
      <td>".  $row1['naslov_objave'] . "</td>
      <td>". $row3  ['naslov_teme'] ."</td>
      <td>". $row2  ['naslov_podteme'] ."</td>
      <td>". date("d.m.Y", strtotime($row1['datum_objave'])) ."</td>
      <td>". $row4  ['email'] ."</td>
    </tr> 
    <tr>
    <td colspan='6'>". $row1 ['text']."</td>
    </tr>";
    
    while ($rowz = $stmtz->fetch()) {
    
      $url=$rowz['url'];
      //<img id="myImg" src="img_snow.jpg" alt="Snow" style="width:100%;max-width:300px">
      
   echo "
    <tr>
    <td colspan='6'><img id='myImg' alt='slikica'style='width: 100; height: 200px;' src='uploads/".$url."'></td>
    </tr>
    ";
    }
    echo "
    <tr>
    <td colspan='2'>".'<a class="btn btn-light js-scroll-trigger" href="objava_delete.php?obj='.$objava.'" onclick="return confirm(\'Ste prepričani, da hočete objavo izbrisati?\');")>Delete</a>'."</td>
    <td colspan='3'><a class='btn btn-light js-scroll-trigger' href='objava_edit.php?obj=".$objava."'>Edit</a></td>
    <td colspan='2'><a class='btn btn-light js-scroll-trigger' href='forum.php'>Nazaj</a></td>
    </tr>
    ";
  
$number++;
}
echo "
</tbody>
</table> ";

?>  
</div>
</div>


<?php

?>



      <?php 

$query5 = "SELECT * FROM komentarji where id_objava=".$objava;
$stmt5 = $pdo->prepare($query5);
$stmt5->execute();
$number1=1;
while($row5 = $stmt5->fetch())
//0 should be the current post's id
{
  $query6 = "SELECT * FROM uporabniki where id=".$row5['id_uporabnik'];
  $stmt6 = $pdo->prepare($query6);
  $stmt6->execute();
  $row6 = $stmt6->fetch();
  {
?>

    
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>Št.Komentarja:</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Komentirano:&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Komentiral:</th>
    </tr>
  </thead>
  <tbody>
        <?php
  
 
$komentar = $row5['id'];
      
      echo "
    <tr>
      <th scope='row'>".$number1."</th>
      <td>". date("d.m.Y", strtotime($row5['datum_komentarja'])) ."</td>
      <td>". $row6  ['email'] ."</td>
      
    </tr> 
    <tr>
    <td colspan='6'>". $row5 ['komentar']."</td>
    </tr>
    <tr>
    <td colspan='3'>".'<a class="btn btn-light js-scroll-trigger" href="komentar_delete.php?kom='.$komentar.'&obj='.$objava.'" onclick="return confirm(\'Ste prepričani, da želite izbrisati komentar?\');")>Delete</a>'."</td>
    </tr>
    ";
  
$number1++;
}
echo "
</tbody>
</table> ";

?> 
</div>
    </div>



<?php
}
?>





<?php
echo "<form action='komentar_insert.php?obj=".$objava."' method='post' enctype='multipart/form-data'> ";
?>
<!-- Here the shit they must fill out -->
<textarea name="text" id="editor">
        
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<input type="file" name="files[]" multiple  id="img"  accept=".jpeg, .jpg, .png, .gif">
  <input type="submit" name="submit" value="Komentiraj" />
</form>
 
        
        </h2>
        
      </div>
    </div>
  </header>

  
  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
       <?php /* <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a> */ ?>
        <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</body>

</html>

    <?php } 
    
    else if($rowx['id_uporabnik'] == $_SESSION['id']){
?>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Objava</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>

<!-- Custom styles for this template -->
<link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Meni
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
        </li>
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="pravila.php">Pravila</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="admin.php">Nastavitve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="odjava.php">Odjava</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        
        
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Naslov</th>
      <th scope='col'>Tema</th>
      <th scope='col'>Podtema</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Objavljeno&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Objavil</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $number=1;
      while($row1 = $stmt1->fetch())
{
  
  $query2 = "SELECT * FROM podteme where id=".$row1['id_podteme'];
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $row2 = $stmt2->fetch();

    $query3 = "SELECT * FROM teme where id=".$row2['id_tema'];
    $stmt3 = $pdo->prepare($query3);
    $stmt3->execute();
    $row3 = $stmt3->fetch();

    $query4 = "SELECT * FROM uporabniki where id=". $row1['id_uporabnik'];
    $stmt4 = $pdo->prepare($query4);
    $stmt4->execute();
    $row4 = $stmt4->fetch();

      
      echo "
    <tr>
      <th scope='row'>".$number."</th>
      <td>".  $row1['naslov_objave'] . "</td>
      <td>". $row3  ['naslov_teme'] ."</td>
      <td>". $row2  ['naslov_podteme'] ."</td>
      <td>". date("d.m.Y", strtotime($row1['datum_objave'])) ."</td>
      <td>". $row4  ['email'] ."</td>
    </tr> 
    <tr>
    <td colspan='6'>". $row1 ['text']."</td>
    </tr>
    <tr>
    <td colspan='2'>".'<a class="btn btn-light js-scroll-trigger" href="objava_delete.php?obj='.$objava.'" onclick="return confirm(\'Ste prepričani, da hočete objavo izbrisati?\');")>Delete</a>'."</td>
    <td colspan='3'><a class='btn btn-light js-scroll-trigger' href='objava_edit.php?obj=".$objava."'>Edit</a></td>
    <td colspan='2'><a class='btn btn-light js-scroll-trigger' href='forum.php'>Nazaj</a></td>
    </tr>
    ";
  
$number++;
}
echo "
</tbody>
</table> ";

?>  
</div>
</div>


<?php

?>



      <?php 

$query5 = "SELECT * FROM komentarji where id_objava=".$objava;
$stmt5 = $pdo->prepare($query5);
$stmt5->execute();
$number1=1;
while($row5 = $stmt5->fetch())
//0 should be the current post's id
{
  $query6 = "SELECT * FROM uporabniki where id=".$row5['id_uporabnik'];
  $stmt6 = $pdo->prepare($query6);
  $stmt6->execute();
  $row6 = $stmt6->fetch();
  {
?>

      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>Št.Komentarja:</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Komentirano:&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Komentiral:</th>
    </tr>
  </thead>
  <tbody>
        <?php
  
 
$komentar = $row5['id'];
      
      echo "
    <tr>
      <th scope='row'>".$number1."</th>
      <td>". date("d.m.Y", strtotime($row5['datum_komentarja'])) ."</td>
      <td>". $row6  ['email'] ."</td>
      
    </tr> 
    <tr>
    <td colspan='6'>". $row5 ['komentar']."</td>
    </tr>
    <tr>
    <td colspan='3'>".'<a class="btn btn-light js-scroll-trigger" href="komentar_delete.php?kom='.$komentar.'&obj='.$objava.'" onclick="return confirm(\'Ste prepričani, da želite izbrisati komentar?\');")>Delete</a>'."</td>
    </tr>
    ";
  
$number1++;
}
echo "
</tbody>
</table> ";

?> 
</div>
    </div>



<?php
}
?>





<?php
echo "<form action='komentar_insert.php?obj=".$objava."' method='post' enctype='multipart/form-data'> ";
?>
<!-- Here the shit they must fill out -->
<textarea name="text" id="editor">
        
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<input type="file" name="files[]" multiple  id="img"  accept=".jpeg, .jpg, .png, .gif">
  <input type="submit" name="submit" value="Komentiraj" />
</form>
 
        
        </h2>
        
      </div>
    </div>
  </header>


<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

    <div class="social d-flex justify-content-center">
      <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
        <i class="fab fa-twitter"></i>
      </a>
     <?php /* <a href="#" class="mx-2">
        <i class="fab fa-facebook-f"></i>
      </a> */ ?>
      <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
        <i class="fab fa-github"></i>
      </a>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
  <div class="container">
    Copyright &copy; Your Website 2019
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>
    <?php } 
    else { 
        ?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Objava</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>

<!-- Custom styles for this template -->
<link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Meni
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
        </li>
      <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="pravila.php">Pravila</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="nastavitve.php">Nastavitve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="odjava.php">Odjava</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        
        
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Naslov</th>
      <th scope='col'>Tema</th>
      <th scope='col'>Podtema</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Objavljeno&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Objavil</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $number=1;
      while($row1 = $stmt1->fetch())
{
  
  $query2 = "SELECT * FROM podteme where id=".$row1['id_podteme'];
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $row2 = $stmt2->fetch();

    $query3 = "SELECT * FROM teme where id=".$row2['id_tema'];
    $stmt3 = $pdo->prepare($query3);
    $stmt3->execute();
    $row3 = $stmt3->fetch();

    $query4 = "SELECT * FROM uporabniki where id=". $row1['id_uporabnik'];
    $stmt4 = $pdo->prepare($query4);
    $stmt4->execute();
    $row4 = $stmt4->fetch();

      
      echo "
    <tr>
      <th scope='row'>".$number."</th>
      <td>".  $row1['naslov_objave'] . "</td>
      <td>". $row3  ['naslov_teme'] ."</td>
      <td>". $row2  ['naslov_podteme'] ."</td>
      <td>". date("d.m.Y", strtotime($row1['datum_objave'])) ."</td>
      <td>". $row4  ['email'] ."</td>
    </tr> 
    <tr>
    <td colspan='6'>". $row1 ['text']."</td>
    </tr>
    <tr>
    <td colspan='6'><a class='btn btn-light js-scroll-trigger' href='forum.php'>Nazaj</a></td>
    </tr>
    ";
  
$number++;
}
echo "
</tbody>
</table> ";

?>  
</div>
</div>


<?php

?>



      <?php 

$query5 = "SELECT * FROM komentarji where id_objava=".$objava;
$stmt5 = $pdo->prepare($query5);
$stmt5->execute();
$number1=1;
while($row5 = $stmt5->fetch())
//0 should be the current post's id
{
  $query6 = "SELECT * FROM uporabniki where id=".$row5['id_uporabnik'];
  $stmt6 = $pdo->prepare($query6);
  $stmt6->execute();
  $row6 = $stmt6->fetch();
  {
?>

      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>Št.Komentarja:</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Komentirano:&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Komentiral:</th>
    </tr>
  </thead>
  <tbody>
        <?php
  
 
$komentar = $row5['id'];
      
      echo "
    <tr>
      <th scope='row'>".$number1."</th>
      <td>". date("d.m.Y", strtotime($row5['datum_komentarja'])) ."</td>
      <td>". $row6  ['email'] ."</td>
      
    </tr> 
    <tr>
    <td colspan='6'>". $row5 ['komentar']."</td>
    </tr>
    ";
  
$number1++;
}
echo "
</tbody>
</table> ";

?> 
</div>
    </div>



<?php
}
?>





<?php
echo "<form action='komentar_insert.php?obj=".$objava."' method='post' enctype='multipart/form-data'> ";
?>
<!-- Here the shit they must fill out -->
<textarea name="text" id="editor">
        
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<input type="file" name="files[]" multiple  id="img"  accept=".jpeg, .jpg, .png, .gif">
  <input type="submit" name="submit" value="Komentiraj" />
</form>
 
        
        </h2>
        
      </div>
    </div>
  </header>


<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

    <div class="social d-flex justify-content-center">
      <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
        <i class="fab fa-twitter"></i>
      </a>
     <?php /* <a href="#" class="mx-2">
        <i class="fab fa-facebook-f"></i>
      </a> */ ?>
      <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
        <i class="fab fa-github"></i>
      </a>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
  <div class="container">
    Copyright &copy; Your Website 2019
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>

    <?php } }

else { ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Objava</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PROrum</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Meni
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Domov</a>
          </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="pravila.php">Pravila</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Prijava</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="register.php">Registracija</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        
        
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Naslov</th>
      <th scope='col'>Tema</th>
      <th scope='col'>Podtema</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Objavljeno&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Objavil</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $number=1;
      while($row1 = $stmt1->fetch())
{
  
  $query2 = "SELECT * FROM podteme where id=".$row1['id_podteme'];
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $row2 = $stmt2->fetch();

    $query3 = "SELECT * FROM teme where id=".$row2['id_tema'];
    $stmt3 = $pdo->prepare($query3);
    $stmt3->execute();
    $row3 = $stmt3->fetch();

    $query4 = "SELECT * FROM uporabniki where id=". $row1['id_uporabnik'];
    $stmt4 = $pdo->prepare($query4);
    $stmt4->execute();
    $row4 = $stmt4->fetch();

      
      echo "
    <tr>
      <th scope='row'>".$number."</th>
      <td>".  $row1['naslov_objave'] . "</td>
      <td>". $row3  ['naslov_teme'] ."</td>
      <td>". $row2  ['naslov_podteme'] ."</td>
      <td>". date("d.m.Y", strtotime($row1['datum_objave'])) ."</td>
      <td>". $row4  ['email'] ."</td>
    </tr> 
    <tr>
    <td colspan='6'>". $row1 ['text']."</td>
    </tr>
    <tr>
    <td colspan='3'><a class='btn btn-light js-scroll-trigger' href='forum.php'>Nazaj</a></td>
    </tr>
    ";
  
$number++;
}
echo "
</tbody>
</table> ";

?>  
</div>
</div>


<?php

?>



      <?php 

$query5 = "SELECT * FROM komentarji where id_objava=".$objava;
$stmt5 = $pdo->prepare($query5);
$stmt5->execute();
$number1=1;
while($row5 = $stmt5->fetch())
//0 should be the current post's id
{
  $query6 = "SELECT * FROM uporabniki where id=".$row5['id_uporabnik'];
  $stmt6 = $pdo->prepare($query6);
  $stmt6->execute();
  $row6 = $stmt6->fetch();
  {
?>

      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
        <table class='table table-dark w-auto'>
  <thead>
    <tr>
      <th scope='col'>Št.Komentarja:</th>
      <th scope='col'>&nbsp;&nbsp;&nbsp;Komentirano:&nbsp;&nbsp;&nbsp;</th>
      <th scope='col'>Komentiral:</th>
    </tr>
  </thead>
  <tbody>
        <?php
  
 
$komentar = $row5['id'];
      
      echo "
    <tr>
      <th scope='row'>".$number1."</th>
      <td>". date("d.m.Y", strtotime($row5['datum_komentarja'])) ."</td>
      <td>". $row6  ['email'] ."</td>
      
    </tr> 
    <tr>
    <td colspan='6'>". $row5 ['komentar']."</td>
    </tr>
    ";
  
$number1++;
}
echo "
</tbody>
</table> ";

?> 
</div>
    </div>



<?php
}
?>






 
        
        </h2>
        
      </div>
    </div>
  </header>

  
  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="social d-flex justify-content-center">
        <a href="https://twitter.com/jkxycs" target="_blank" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
       <?php /* <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a> */ ?>
        <a href="https://github.com/j1xaro" target="_blank" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>

<?php }
?>