
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>login</title>
  </head>
  <body class="back">
        <div class="top">
          <!--
  <div class="header">
      <hr><hr>
      <h1><- - - -  S.A.F.E  - - - -></h1>
      <hr><hr>
      </div>
-->
      <ul class="menu">
        <li class="wahl"><a href="index.php"><h4 class="pos">Login</h4></a></li>
        <li class="wahl"><a href="registrieren.php" class="active"><h4 class="pos">Registrierung</h4></a></li>
        <li class="wahl"><a href="überuns.php"><h4 class="pos">Über uns</h4></a></li>
      </ul>
      

<br>

<h1 class="title">Registrierung</h1>

<div class="container2">
<form  action="projekt.php"  method="POST" name="entry">
 <label for="nlogin" class="form-label">Ihre Benutzername</label>
  <input type="text" name="nlogin" required class="form-input">
 <label for="npassword" class="form-label">Password</label>
  <input type="password" class="form-input" required name="npassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Muss mindestens eine Zahl und einen Groß- und Kleinbuchstaben sowie mindestens 8 oder mehr Zeichen enthalten">
 <label for="nemail" class="form-label">E-Mail-Adresse</label>
  <input type="email" name="nemail" required class="form-input">
 <label for="vorname" class="form-label">Ihre Vorname</label>
  <input type="text" name="vorname" required class="form-input">
 <label for="nachname" class="form-label">Ihre Nachname</label>
  <input type="text" name="nachname" required class="form-input"> 
 <label for="straße" class="form-label">Straße Nr.</label>
  <input type="text" name="straße" required class="form-input">
 <label for="plz" class="form-label">PLZ</label>
  <input type="text" name="plz" required class="form-input">
 <label for="stadt" class="form-label">Stadt</label>
  <input type="text" name="stadt" required class="form-input">  
 <label for="land" class="form-label">Land</label>
  <input type="text" name="land" required class="form-input">
<button type="submit" class="form-button">Submit</button>
</div>
<?php
?>
</form>
</div>
</div>



  </body>
</html>
