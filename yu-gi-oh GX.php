<?php
// Inicia a ses�o
session_start();
header('Content-Type: text/html; charset=Windows-1252'); 
// Quando a ses�o termina � redencionada para a pagina login
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
<!-- Barra de navega��o -->
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
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Yu-Gi-Oh! GX</big></big></strong>
	<tr>	
		<!--Inicio dos detalhes do Anime-->
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh GX.jpg" width="250" height="300"><br>
		<th><strong><p= style="color:white"><br>&emsp;&emsp;&emsp;Formato:</strong><p= style="color:white"> Anime<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;G�nero:</strong><p= style="color:white"> A��o , Com�dia , Fantasia , Jogos , Shounen <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Autor:</strong><p= style="color:white"> Naoyuki Kageyama<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Dire��o:</strong><p= style="color:white"> Hatsuki Tsuji<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Estudio:</strong><p= style="color:white"> Studio Gallop, Nihon Ad Systems<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Epis�dio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Epis�dios:</strong> <p= style="color:white"> 180<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ovas:</strong> <p= style="color:white"> 0<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Filmes:</strong><p= style="color:white"> 0<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Status do Anime:</strong> Completo<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2004<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Classifica��o:</strong><p= style="color:white"> 10 Anos
		<!--Fim dos detalhes do Anime-->
	<tr>
		<th>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<Input href="#" type="image" src="img/addF.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
		&ensp;<Input href="#" type="image" src="img/Time.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
		&ensp;<Input href="#" type="image" src="img/visto.png" alt="Submit" width="50" height="50" class="btn btn-primary"></input>
	<tr>
		<!--Inicio da Sinopse-->
		<th><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Sinopse:</big></big></strong>
		<th><br><br><br><strong><p= style="color:white">Ambientado num futuro pr�ximo, Yu-Gi-Oh! GX narra a hist�ria de Jaden Yuki a partir do momento em que
		<br><strong><p= style="color:white">come�a a lutar numa academia de duelistas, a Duel Academy, pertencente a Kaiba Corp. A academia tem como
		<br><strong><p= style="color:white">objetivo de desenvolver ao m�ximo o potencial  de luta de seus alunos, que s�o divididos em tr�s grupos:
		<br><strong><p= style="color:white">no Obelisco Azul est� a elite,no Ra Amarelo est�o aqueles com potencial e no Slifer Vermelho os jogadores de
		<br><strong><p= style="color:white">n�vel mais baixo. Enquanto est� a caminho dos exames de admiss�o para a Academia de Duelos, Jaden Yuki bate de
		<br><strong><p= style="color:white">frente com Yugi Muto, o Rei dos Jogos. Yugi desconfia que Jaden deva ser um duelista e ele confirma. Yugi decide
		<br><strong><p= style="color:white">dar como presente para Jaden uma carta de duelos de boa sorte.
		<br><strong><p= style="color:white">Apesar de serem jovens Jaden e seus amigos tem que salvar o universo e o mundo dos viloes que aparecem ao
		<br><strong><p= style="color:white">decorrer dos episodios.
		<!--Fim da Sinopse-->
	<tr>	
		<!--Inicio da(s) Temporada(s) -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Temporada(s)</big></big></strong><br>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="yu-gi-oh.html" class="btn btn-primary" role="button">Anterior</a>
		</th>
		<!--Fim da(s) Temporada(s)-->

	<tr>	
		<!--Inicio dos epis�dios o anime  -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Epis�dios :</big></big></strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh GX ep1.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Yu-Gi-oh GX ep1.php"><p= style="color:white"> O Cora��o Das Cartas<br>Epis�dio 1 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh GX ep2.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Yu-Gi-oh GX ep2.php"><p= style="color:white"> O Grande Desafio<br>Epis�dio 2 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\yu-gi-oh GX ep3.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Yu-Gi-oh GX ep3.php"><p= style="color:white">Viagem Ao Reino Dos Duelos<br>Epis�dio 3 
		<!--Fim dos epis�dios o anime  -->
</table>
	

</body>
</html>