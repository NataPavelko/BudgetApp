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
<style>
  .flex{
    overflow: scroll;
    max-height: 650px;
  }
td, th {
  padding: 7px;
  border-collapse: collapse;
border-top: 2px solid #F1F1F2;
  text-align: left;
}
tr{
  border-bottom: 1px solid black;
}
th{
  text-transform: uppercase;
  color: rgb(46, 42, 45);
}
td{
    color:rgb(46, 42, 45);
}
table.center {
  margin-left: auto;
  margin-right: auto;
  border-spacing: 1px;
}
tr:nth-child(even) {
background-color: #adebad;
}
</style>

  </head>
  <body>
    <!--
    <div class="top">
    <div class="header">
      <hr><hr>
      <h1><- - - -  S.A.F.E  - - - -></h1>
      <hr><hr>
      </div> -->
       <ul class="menu">
   <li class="wahl"><a href="transaktion.php" class="active"><h4 class="pos">Transaktionen</h4></a></li>
   <li class="wahl"><a href="analis.php"><h4 class="pos">Analyse</h4></a></li>
   <li class="wahl"><a href="profil.php"><h4 class="pos">Mein Profil</h4></a></li>
    <!-- <li class="wahl"><a href="überuns.php"><h4 class="pos">Über uns</h4></a></li> -->
   <li class="wahl" style="float:right"><a href="aus.php"><h4 class="pos">Ausloggen</h4></a></li>
 </ul>
 </div>
        <div class="container">
        <h1 class="title">Budget-Formular</h1>
        <form id="budgetForm" action="projekt.php" method="POST" class="transaction">
          <label for="date" class="form-label">Datum der Transaktion</label>
          <input type="date" name="date" class="form-input">
            <!-- Feld für Betrag -->
            <label for="amount" class="form-label">Betrag (€):</label>
            <input type="number" id="betrag" name="amount" placeholder="Betrag" required class="form-input amount">
            <!-- Feld für Art der Transaktion -->
            <label for="type" class="form-label">Art:</label>
            <select id="type" name="type" required class="form-input">
                <option value="einnahme">Einnahme</option>
                <option value="ausgabe">Ausgabe</option>
            </select>

            <!-- Feld für Kategorie -->
            <label for="kategorie" class="form-label">Kategorie:</label>
            <select id="kategorie" name="kategorie" required class="form-input">
            </select>

            <!-- Feld für Beschreibung -->
            <label for="info" class="form-label">Beschreibung:</label>
            <input type="text" id="beschreibung" name="info" placeholder="Beschreibung" required class="form-input">

            <!-- Submit-Button -->
            <button type="submit" class="form-button">Speichern</button>
        </form>

    
        <script src="script.js"></script>
     
        <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "neu";

$con = mysqli_connect($host, $user, $pass, $db);
$sql="SELECT amount, description, Datum, Type, categories.name, created_at from transactions, categories
where transactions.category_id=categories.id and transactions.user_id =".$_SESSION['id']." order by created_at";
$result = $con->query($sql);
?>
  <?php 
  //session_start();
  //if(isset($_SESSION["amount"])) { ?>
  <br>
<div class="flex">
    <table class="center" style="width:100%" >
  <tr>
    <th>Datum</th>
    <th>Betrag</th>
    <th>Art</th>
    <th>Kategorie</th>
    <th>Beschreibung</th>
  </tr>
   <?PHP
while ($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?=$row['Datum']?></td>
<td><?=$row['amount']?></td>
<td><?=$row['Type']?></td>
<td><?=$row['name']?></td>
<td><?=$row['description']?></td>
</tr>
<?PHP
}
?> 
</table>

    </div>
</div>

    </div>

    <br /><br /><br /><br />
  </body>
</html>

