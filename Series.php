<?php
// Inicia a sesão
session_start();
header('Content-Type: text/html; charset=Windows-1252'); 
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
<br>
<br>
<br>
<br>
<big><a style="color:white">&emsp;&emsp;&emsp;&emsp; Algum Anime em Especifico ?</a>
<a class="nav-link" href="22.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Encontre Aqui</button>
</a>
<!-- Inicio da lista -->
<!-- Bleach -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Bleach.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="bleach.php"><p= style="color:white">&emsp;&emsp; Bleach </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong> <p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Comédia , Shounen , Sobrenatural , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Legendado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 229<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2004<br>
</table>

<!-- Blue Dragon -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Blue Dragon.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="blue dragon.php"><p= style="color:white">&emsp;&emsp; Blue Dragon </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Aventura , Comédia , Fantasia <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 51<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2007<br>
</table>

<!-- Dragon Ball -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball .jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Dragon Ball.php"><p= style="color:white">&emsp;&emsp; Dragon Ball </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Artes Marciais , Aventura , Fantasia , Shounen , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 153<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1986<br>
</table>
<!-- Dragon Ball Z -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball Z.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Dragon Ball Z.php"><p= style="color:white">&emsp;&emsp; Dragon Ball Z </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Artes Marciais , Aventura , Fantasia , Shounen , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 291<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1989<br>
</table>

<!-- Dragon Ball GT -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball GT.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Dragon Ball GT.php"><p= style="color:white">&emsp;&emsp; Dragon Ball GT </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Genero:</strong><p= style="color:white"> Artes Marciais , Aventura , Fantasia , Shounen , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 64<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1996<br>
</table>

<!-- Fairy Tail -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Fairy Tail.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Fairy Tail.php"><p= style="color:white">&emsp;&emsp; Fairy Tail </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Aventura , Fantasia , Magia , Shounen <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 277<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2009<br>
</table>

<!-- Hunter X Hunter  -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\HunterXHunter.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Hunter X Hunter.php"><p= style="color:white">&emsp;&emsp; Hunter X Hunter  </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Aventura , Shounen , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Legendado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 92<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1999<br>
</table>

<!-- Naruto -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\naruto.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="naruto.php"><p= style="color:white">&emsp;&emsp; Naruto </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Artes Marciais , Aventura , Shoujo , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 220<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2002<br>
</table>

<!-- Naruto Shippuden -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Naruto Shippuden.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="Naruto Shippuden.php"><p= style="color:white">&emsp;&emsp; Naruto Shippuden </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Artes Marciais , Aventura , Shoujo , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 112<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2007<br>
</table>

<!-- One Piece -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\One Piece.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="One Piece.php"><p= style="color:white">&emsp;&emsp; One Piece </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Genero:</strong><p= style="color:white"> Ação , Aventura , Comédia , Drama , Shounen <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 52<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1999<br>
</table>

<!-- YU-GI-OH! -->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="yu-gi-oh.php"><p= style="color:white">&emsp;&emsp; Yu-Gi-Oh! </a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Comédia , Fantasia , Jogos , Shounen <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 224<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2000<br>
</table>


<!-- YU-GI-OH! GX-->
<table bordeer="0" align="left">
	<tr>
	      <th><br><br><br><strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh GX.jpg" width="150" height="200"><br>
		<th><strong><a class="nav-link" href="yu-gi-oh GX.php"><p= style="color:white">&emsp;&emsp; Yu-Gi-Oh! GX</a>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;</strong><p= style="color:white"><br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Comédia , Fantasia , Jogos , Shounen <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Total  de episódios:</strong> <p= style="color:white"> 3 de 180<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2004<br>
	</tr>
</table>
</html>