<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "neu";

$con = mysqli_connect($host, $user, $pass, $db);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

if(isset($_POST["nlogin"])){
  $nlogin=$_POST["nlogin"];
  $npassword=$_POST["npassword"];
  $nemail=$_POST["nemail"];
  $vorname=$_POST["vorname"];
  $nachname=$_POST["nachname"];
  $straße=$_POST["straße"];
  $plz=$_POST["plz"];
  $stadt=$_POST["stadt"];
  $land=$_POST["land"];
  $sql="INSERT INTO users(username, password, email, vorname, nachname, straße, PLZ, stadt, land)
  value('$nlogin','$npassword','$nemail', '$vorname','$nachname','$straße','$plz','$stadt','$land')";
  $result = $con->query($sql); 
    header("Location: /php/projectBudget/index.php");
}

if(isset($_POST["login"])){
  $log = $_POST["login"];
  $pas = $_POST["password"];
  $sql = "SELECT id, username, password from users WHERE username = '".$log."' and password = '".$pas."'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  if(!isset($row)) {
    header("Location: /php/projectBudget/index.php");
  }
  if($row["username"]==$log && $row["password"]==$pas){
    session_start();
    $_SESSION["id"] = $row["id"];
    header("Location: /php/projectBudget/transaktion.php");
  }
}

if(isset($_POST["amount"])){
  $amount=$_POST["amount"];
  $info=$_POST["info"];
  $datum=$_POST["date"];
  $kategorie=$_POST["kategorie"];
  $type=$_POST["type"];
  $Y=explode("-", $datum);
  $mY=$Y[0];
  $monat=$Y[1];
  session_start();
  $userId = $_SESSION["id"];
  //$user_id="SELECT id from users where users.id=transactions.user_id";
  $catId="SELECT id, name, Type from categories";
  $sql="INSERT into transactions(user_id, amount, description, Datum, category_id, mY, monat) value('$userId','$amount','$info','$datum', '$kategorie', '$mY', '$monat')";
  $result = $con->query($sql); 
   header("Location: /php/projectBudget/transaktion.php");
}

?>