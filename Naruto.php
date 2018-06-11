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
    </ul>
  </div>
</nav>
<!--Inicio sobre o anime -->
<table bordeer="0" align="left">
	<tr>
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Naruto</big></big></strong>
	<tr>	
		<!--Inicio dos detalhes do Anime-->
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Naruto.jpg" width="250" height="300"><br>
		<th><strong><p= style="color:white"><br>&emsp;&emsp;&emsp;Formato:</strong><p= style="color:white"> Anime<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white">  Ação , Artes Marciais , Aventura , Shoujo , Superpoder<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Autor:</strong><p= style="color:white"> Masashi Kishimoto <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Direção:</strong><p= style="color:white"> Hayato Date<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Estudio:</strong><p= style="color:white"> Studio Pierrot<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Episódios:</strong> <p= style="color:white"> 220<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ovas:</strong> <p= style="color:white"> 6<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Filmes:</strong><p= style="color:white"> 3<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Status do Anime:</strong> Completo<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2002<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Classificação:</strong><p= style="color:white"> 14 Anos
		<!--Fim dos detalhes do Anime-->
	<tr>
		<th>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<Input href="#" type="image" src="img/addF.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
		&ensp;<Input href="#" type="image" src="img/Time.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
		&ensp;<Input href="#" type="image" src="img/visto.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
	<tr>
		<!--Inicio da Sinopse-->
		<th><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Sinopse:</big></big></strong>
		<th><br><br><br><strong><p= style="color:white">Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha,  	
		<br><strong><p= style="color:white">a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por
		<br><strong><p= style="color:white">Minato Namikaze (Quarto Hokage), com a  finalidade de salvar a Vila da Folha. Desde então, Naruto é visto 
		<br><strong><p= style="color:white">por muitas pessoas como um monstro, não só pelos familiares das pessoasmortas pela Kyuubi, mas também por  
		<br><strong><p= style="color:white">pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário.  
		<br><strong><p= style="color:white">Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido 	
		<br><strong><p= style="color:white">por todos. Ele entra na academia ninja, onde sofre com as notas baixas, mas é ajudado por seu professor, 
		<br><strong><p= style="color:white">Iruka Umino,que posteriormente se torna seu amigo. Consegue finalmente se tornar Gennin, e a partir daí passa 
		<br><strong><p= style="color:white">a ser ensinado por um Jounin, Kakashi Hatake, e forma uma equipe com Sasuke Uchiha 
		<br><strong><p= style="color:white">(que no começo não se dão bem) e Sakura Haruno, sua grande paixão.
		<!--Fim da Sinopse-->
	<tr>		
		<!--Inicio da(s) Temporada(s) -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Temporada(s)</big></big></strong><br>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="Naruto Shippuden.html" class="btn btn-primary" role="button">Próxima</a>
		</th>
		<!--Fim da(s) Temporada(s)-->
	<tr>
		<!--Inicio dos episódios o anime  -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Episódios</big></big></strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Naruto ep1.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">Naruto Uzumaki Chegando!<br>Episódio 1 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Naruto ep2.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">Meu Nome é Konohamaru<br>Episódio 2 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Naruto ep3.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">Sasuke E Sakura: Amigos Ou Inimigos?<br>Episódio 3 
		<!--Fim dos episódios o anime  -->
</tatable>
	

</body>
</html>


	
