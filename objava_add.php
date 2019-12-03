<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once './database.php';
if (isset($_SESSION['id']))
{
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
            <a class="nav-link js-scroll-trigger" href="forum.php">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="pravila.php">Pravila</a>
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
        <h1>Dodaj objavo</h1>
<form action="objava_insert.php" method="post" enctype="multipart/form-data">
<?php $query = "SELECT * FROM podteme";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        echo "<select name='podtema'>";
        while($row = $stmt->fetch()) {
        echo "<option value='" . $row['id'] ."'>" . $row['naslov_podteme'] ."</option>";
    }
?>
<input type="text" class="form-control mb-4" name="naslov" placeholder="Vnesi naslov" required="required" />
<textarea name="text" id="editor">
        
    </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
<!-- <input type="file" name="files[]" multiple  id="img"  accept=".jpeg, .jpg, .png, .gif"> -->
    <input type="submit" name="submit" value="Objavi" />
</form>
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
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

    <?php 
} 
else {
    header("Location:index.php");
}
?>