<?php
// Inicia a sesão
session_start();
 
// Quando a sesão termina é redencionada para a pagina login
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  exit;
}
?>

<!DOCTYPE html>

<html>
<head>

</head>

<body background="img\back_black_2.jpg" type="text/css" href="css/carousel.css">

</body>

</html>