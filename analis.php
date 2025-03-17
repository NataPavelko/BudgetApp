
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
   <li class="wahl"><a href="transaktion.php"><h4 class="pos">Transaktionen</h4></a></li>
   <li class="wahl"><a href="analis.php" class="active"><h4 class="pos">Analyse</h4></a></li>
   <li class="wahl"><a href="profil.php"><h4 class="pos">Mein Profil</h4></a></li>
   <li class="wahl" style="float:right"><a href="aus.php"><h4 class="pos">Ausloggen</h4></a></li>
 </ul>
         <div class="container">
         <h1 class="title">Budget-Analyse</h1>

        <form id="analisForm" action="analis.php" method="POST" class="transaction">
            <label for="von" class="form-label">Von</label>
             <input type="date" name="von" class="form-input">

            <label for="bis" class="form-label">Bis</label>
             <input type="date" name="bis" class="form-input">
                       
            <label for="typeAn" class="form-label">Art:</label>
        <select id="type" name="typeAn" required class="form-input">
                <option value="einnahme">Einnahme</option>
                <option value="ausgabe">Ausgabe</option>
        </select>
        

            <label for="kategorie" class="form-label">Kategorie:</label>
           <select id="kategorie" name="kategorie" required class="form-input">
           </select>

            <button type="submit" class="form-button">Speichern</button>
        </form>

</div>
         <script src="script.js"></script>
        <div class="container">
        <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "neu";

$con = mysqli_connect($host, $user, $pass, $db);
$result=[];
if(isset($_POST["von"])){
        $von=$_POST["von"];
        $bis=$_POST["bis"];
        $typeAn=$_POST["typeAn"];
        $userId = $_SESSION["id"];
        $kategorie=$_POST["kategorie"];
        //$user_id="SELECT id from users where users.id=transactions.user_id";
        $sql="SELECT amount, description, Datum, categories.Type, categories.name from transactions, categories
        where transactions.category_id=categories.id
        and  Datum >= '".$von."' and Datum <= '".$bis."' and categories.id = ".$kategorie." and categories.Type='".$typeAn."' and user_id = ".$userId;
        $result = $con->query($sql);  

    }
?>

  <br>
<div class="flex">
    <table class="center" style="width:100%" >
 <?php 
    if(!isset($_POST["von"]))
{?>
<div class="vonbis">
<h2>Wählen Sie den Zeitraum Ihrer Transaktionen aus</h2>
</div>
<?php } 
?>

 <?php 
    if(isset($_POST["von"]))
{?>

<div class="vonbis">
    <h2>Ergebnisse von <?php echo $von ?> bis <?php echo $bis ?></h2>
</div>  

    <tr>
    <th>Datum</th>
    <th>Betrag</th>
    <th>Art</th>
    <th>Kategorie</th>
    <th>Beschreibung</th>
  </tr>
  <?php
}?>
   <?PHP
   if(isset($_POST["von"]))
{
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
}

?> 
</table>
</div></div>
<?php

if(isset($_POST["von"])){
        $von=$_POST["von"];
        $bis=$_POST["bis"];
        $typeAn=$_POST["typeAn"];
        $userId = $_SESSION["id"];
        $kategorie=$_POST["kategorie"];

        $sql="SELECT SUM(amount) as amount from transactions , categories
        WHERE transactions.category_id=categories.id
        and type='Einnahme'
        and  Datum >= '".$von."' and Datum <= '".$bis."'
        and user_id=".$userId;
        $result = $con->query($sql); 
        while ($row = mysqli_fetch_array($result)) {
?>
<div class="flexi">
 <div class="cont">
  <h4>Einnahmen von <?php echo $von ?> bis <?php echo $bis ?> : <?=$row['amount']?></h4>
 
 <?PHP        
    }}
?>
 </div>

<?php
if(isset($_POST["von"])){
        $von=$_POST["von"];
        $bis=$_POST["bis"];
        $typeAn=$_POST["typeAn"];
        $userId = $_SESSION["id"];
        $kategorie=$_POST["kategorie"];

        $sql="SELECT SUM(amount) as amount from transactions , categories
        WHERE transactions.category_id=categories.id
        and type='Ausgabe'
        and  Datum >= '".$von."' and Datum <= '".$bis."'
        and user_id=".$userId;
        $result = $con->query($sql); 
        while ($row = mysqli_fetch_array($result)) {
?>
 <div class="cont">
  <h4>Ausgaben von <?php echo $von ?> bis <?php echo $bis ?> : <?=$row['amount']?></h4>
 
 <?PHP        
    }}
?>
 </div>
  </div>
  </body>
</html>

