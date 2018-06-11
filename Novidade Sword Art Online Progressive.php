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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/tema.css">
</head>
<body background="img\back_black.jpg" >
<!-- Barra de navegação -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">
 <img src="img\gg.png" width="40" height="40" alt="40">
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
    &emsp;&emsp;&emsp;<input class="btn btn-primary dropdown-toggle" type="image" src="img/user1.png" alt="Submit" width="50" height="40" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="btn btn dropdown-menu">
    <li class="dropdown-header">Login/Registo</li>
      <li><a class="nav-link" style="color:black" href="login.html">&ensp; Login</a></li>
      <li><a class="nav-link" style="color:black" href="registo.html">&ensp; Register</a></li>
    </ul>
  </div>
</div>

    </div>
    </ul>
  </div>
</nav>
<body>
<table border="0" align="left">
	<tr>
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Sword Art Online Progressive</big></big></strong>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 15 , Fevereiro , 2018
	<tr>
		<th><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img/novidades SAO.jpg" class="img-thumbnail" width="400" height="600">	
	<td>
		<strong><big><p= style="color:white">&emsp;&emsp; A mais recente edição da Dengeki G´s Magazine revelou que a 
		<br><strong><p= style="color:white">&emsp;&emsp;para Manga de Sword Art Online Passive, a light-novel de Reki 
		<br><strong><p= style="color:white">&emsp;&emsp;Kawahara,vai terminar a 28 de fervereiro de 2018 e que será revelado 
                                <br><strong><p= style="color:white">&emsp;&emsp;um  "anúncio importante" relacionado com a obra.
		<br><br><strong><p= style="color:white">&emsp;&emsp; O manga de Sword Art Online Progressive reconta a história de Sword 
		<br><strong><p= style="color:white">&emsp;&emsp;Art Online com algumas alterações e acompanhando Kirito à medida que
		<br><strong><p= style="color:white">&emsp;&emsp;ele vai ultrapassando cada um dos andares do castelo de Aincrad. 
		<br><br><strong><p= style="color:white">&emsp;&emsp; O manga de Sword Art Online Progressive começou a ser lançado em
		 <br><strong><p= style="color:white">&emsp;&emsp; junho de 2013 e o 6º volume foi publicado em junho do ano passado.
		<br>
</table>
<table border="0" align="left">

	<tr>
		<th><br><br><br><br><strong><big><big>&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp; Conteúdo relacionado:</big></big></strong>
		<br><br><strong><big>&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp; Veja também o novo Trailer de Sword Art Online: Alicization
		<br><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<iframe width="854" height="480" src="https://www.youtube.com/embed/-L19ao2w4ro" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

	<br>
	<br>
	<br>
</body>
</html>