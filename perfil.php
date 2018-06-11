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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"></link>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/tema.css"></link>
</head>
<!-- Barra de navegação -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand">
 <img src="img\gg.png" width="40" height="40" alt="40"></img>
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novidades.php">Novidades</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="series.php">Lista</a>
      </li>
</ul>
<div class="dropdown">
    &emsp;&emsp;&emsp;&emsp;&ensp;&ensp;<input class="btn btn-primary dropdown-toggle" type="image" src="img/user1.png" alt="Submit" width="50" height="40" data-toggle="dropdown"></input>
    <span class="caret"></span></button>
    <ul class="btn btn dropdown-menu">
    <li class="dropdown-header" align=center><?php echo htmlspecialchars($_SESSION['username']); ?></li>
      <li><a class="nav-link" style="color:black" href="perfil.php" align=center>Perfil</a></li>
      <li><a class="nav-link" style="color:black" href="#" align=center>Favoritos</a></li>
	  <li><a class="nav-link" style="color:black" href="#" align=center>Vistos</a></li>
	<li class="dropdown-header">Terminar Sessao</li> 
	  <li><a class="nav-link" href="logout.php" style="color:black" align=center> Terminar </a></li>
    </ul>
  </div>
    </div>
	</nav>
<body background = img/back_6.jpg>	
<br>
<br>
<br>
		<br><br>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;<img align="middle" src="img/Kyoji.jpg" class="img-thumbnail" width="250" height="250">		
		<br><br><strong><big><big><big><p style="text-align:center; color:white"> <?php echo htmlspecialchars($_SESSION['username']); ?> </big></p></strong>
		<br>
		
		<div class="container" style="padding:20px 100px">
	  <div class="progress" style="font-size:85%">
  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:95%">
    Nivel 50
  </div>
</div>
</div>
<br>
<br>
		<br><br><strong><big><big><big><p style="text-align:center; color:white"> <?php echo htmlspecialchars($_SESSION['idade']); ?> </big></p></strong>
<br>
<br>
		&emsp;&emsp;&emsp;&emsp;&emsp; <a style=color:white;>Quer trocar de fundo ?<a href=""> Trocar Aqui</a>.</p>
</html>