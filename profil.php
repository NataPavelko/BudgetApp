<?php
  session_start();
  if(!isset($_SESSION["id"])) {
    header("Location: /php/projectBudget/index.php");
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
          <header>    </header>

        <div class="fürnav">
          <nav>
    <ul class="menu">
      <li class="wahl"><a href="transaktion.php"><h4 class="pos">Transaktionen</h4></a></li>
      <li class="wahl"><a href="analis.php"><h4 class="pos">Analyse</h4></a></li>
      <li class="wahl"><a href="profil.php" class="active"><h4 class="pos">MeinProfil</h4></a></li>
      <li class="wahl" style="float:right"><a href="aus.php"><h4 class="pos">Ausloggen</h4></a></li>
    </ul>
    </nav>
  <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "neu";

    $con = mysqli_connect($host, $user, $pass, $db);
    $sql="SELECT username,email, vorname, nachname, straße, stadt, PLZ, land FROM users
    where id =".$_SESSION["id"];
    $result = $con->query($sql);
    ?>


      <div class="card container">
        <img src="" alt="">
             <?PHP
while ($row = mysqli_fetch_array($result)) {
?>    
    <h1><b>Hallo <?=$row['vorname']?> <?=$row['nachname']?></b></h1>

    <div class="base">

      <p><b>Ihre Username: <?=$row['username']?></b></p>
      <p><b>Ihre E-mail: <?=$row['email']?></b></p>
      <br>
      <h3>Algemeine Informationen</h3>
      <p>
        <small
          ><?=$row['straße']?><br />
          <?=$row['PLZ']?><br />
         <?=$row['stadt']?><br />
         <?=$row['land']?><br />
        </small>
      </p>
      <?PHP
}
?> 
    </div>
  </div>
  </div>
<br>
<br><br><br>



</div>
  </body>
</html>
