
<?php
  session_start();
  if(isset($_SESSION["id"])) {
    header("Location: /php/projectBudget/transaktion.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <title>login</title>
  </head>
  <body class="back">

    <ul class="menu">
      <li class="wahl"><a href="index.php" class="active"><h4 class="pos">Login</h4></a></li>
      <li class="wahl"><a href="registrieren.php"><h4 class="pos">Registrierung</h4></a></li>
      <li class="wahl"><a href="überuns.php"><h4 class="pos">Über uns</h4></a></li>
    </ul>
<div class="login">
<div class="logintext">
 <p><h1> Willkommen bei BudgetTrack</h1></p>
<p><h2>Dein persönlicher Begleiter für Finanzen und Planung!</h2></p>
<hr>
<p> 💡 Behalte deine Ausgaben im Blick:</p>
Einfache und übersichtliche Tools, um Einnahmen und Ausgaben zu verwalten.</p>
<p> 📊 Erreiche deine finanziellen Ziele:</p>
Erstelle Budgets, verfolge deine Fortschritte und spare gezielt für deine Wünsche.</p>

<p> 🔒 Sicher und zuverlässig:</p>
<p>Deine Daten sind bei uns geschützt – Privatsphäre hat höchste Priorität.</p>

<p>Starte jetzt!</p>
<p>Registriere dich oder melde dich an, um die Kontrolle über deine Finanzen zu übernehmen.</p>
</div>
<br>

<div class="loginform">
<?php 
//session_start();
if(!isset($_SESSION["id"])) { ?>
<!-- <h1 class="title">Einloggen</h1> -->
<div class="container1">
<form class="loginf" action="projekt.php" name="entry" method="post">
  <label class="form-label" for="login">Login</label>
  <input class="form-input" type="text" name="login">
  <label class="form-label" for="password">Passwort</label>
  <input class="form-input" type="password" name="password">
  <button class="form-button" type="submit" >Submit</button>
  <a href="registrieren.php">Noch nicht registriert?</a>
</form>
</div>
<?php } ?>
</div>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>




  </body>
</html>
