<?php
//include_once './header.php';
?>

<h1>Registracija</h1>

<form action="user_insert.php" method="post">
    <input type="text" name="ime" class="" placeholder="Vnesi ime" required="required" />
    <input type="text" name="priimek" class="" placeholder="Vnesi priimek" required="required" />
    <input type="email" name="email" class="" placeholder="Vnesi e-pošto" required="required" />
    <input type="date" name="birthday" class=""  placeholder="Vnesi datum rojstva" required="required"/>
    <input type="text" name="naslov" class="" placeholder="Vnesi naslov" required="required"/>
    <input type="password" name="pass1" class="" placeholder="Vnesi geslo" required="required" />
    <input type="password" name="pass2" class="" placeholder="Ponovi geslo" required="required" />
    <input type="submit" value="Shrani" />
</form>

<?php
//include_once './footer.php';
?>