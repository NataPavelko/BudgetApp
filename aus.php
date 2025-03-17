<?php
session_start();
session_destroy();
header("Location: /php/projectBudget/index.php");
?>