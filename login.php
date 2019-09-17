<?php
//include_once './header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Domov</title>

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
      <a class="navbar-brand js-scroll-trigger" href="index.php">PROrum</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Meni
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Pravila</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="odjava.php">Registracija</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="mx-auto my-0 text-uppercase">
          <?php
          echo "Prijava";
          
          ?>
        </h2>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">
            <form action="login_check.php" method="post">
    <input type="email" name="email" class="" placeholder="Vnesite e-pošto" required="required" />
    <input type="password" name="pass" class="" placeholder="Vnesite geslo" required="required" />
    <input type="submit" class="" value="Prijava" />
</form>
</h2>
<h2 class="text-white-50 mx-auto mt-2 mb-5">Če še niste registrirani, se lahko s pritiskom na spodenj gumb.</h2>+
        <a href="register.php" class="btn btn-primary js-scroll-trigger">Registracija</a>
      </div>
    </div>
  </header>

<?php
include_once './footer.php';
?>
