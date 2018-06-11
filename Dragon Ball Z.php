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
<table border="0" align="left">
	<tr>
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Dragon Ball Z</big></big></strong>
	<tr>	
		<!--Inicio dos detalhes do Anime-->
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball Z.jpg" width="250" height="300"><br>
		<th><strong><p= style="color:white"><br>&emsp;&emsp;&emsp;Formato:</strong><p= style="color:white"> Anime<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Artes Marciais , Aventura , Fantasia , Shounen , Superpoder<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Autor:</strong><p= style="color:white"> Akira Toriyama<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Direção:</strong><p= style="color:white"> Minoru Okazaki, Daisuke Nishio<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Estudio:</strong><p= style="color:white"> Toei Animation, Bird Studio<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Dobrado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Episódios:</strong> <p= style="color:white"> 291<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ovas:</strong> <p= style="color:white"> 4<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Filmes:</strong><p= style="color:white"> 15<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Status do Anime:</strong> Completo<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 1989<br>
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
		<th><br><br><br><strong><p= style="color:white">Já adulto, Goku conhece seu irmão mais velho Raditz, que lhe informa que ambos são membros de uma raça 
		<br><strong><p= style="color:white">extraterreste, os Saiyajins. Tal raça enviou Goku ainda criança para a Terra com o objetivo de conquistar o 
		<br><strong><p= style="color:white">planeta, mas ele fere sua cabeça logo após a aterrisagem e esquece sua missão inicial. Goku se nega a ajudar 
		<br><strong><p= style="color:white">Raditz a continuar a missão e começa a confrontar outros inimigos do espaço, como o príncipe Saiyajin Vegeta, 
		<br><strong><p= style="color:white">que se torna seu rival e posteriormente seu aliado. Ele também enfrenta Freeza, um tirano galático responsável 
		<br><strong><p= style="color:white">pela destruição da raça Saiyajin, cujas ações levam Goku a se tranformar em Super Saiyajin. Após uma dura 
		<br><strong><p= style="color:white">batalha no planeta Namek, Goku derrota Freeza e vinga as mortes de bilhões por todo o universo. Quatro anos 
		<br><strong><p= style="color:white">depois, um grupo de andróides das Forças Red Ribbon aparecem, buscando vingança contra Goku. Neste momento 
		<br><strong><p= style="color:white">Vegeta se transforma em super sayajin pela primeira vez e se convence de que pode derrotar Goku. Nesse 
		<br><strong><p= style="color:white">momento, surge uma criatura maligna chamada Cell, que após absorver dois dos andróides para aumentar seu
		<br><strong><p= style="color:white">poder, organiza um torneio de artes marciais para decidir o destino da Terra, mas é derrotado pelo primeiro filho de 
		<br><strong><p= style="color:white">Goku, Son Gohan. Sete anos depois, Goku é atraído para outra batalha pelo bem do universo, contra um monstro 
		<br><strong><p= style="color:white">mágico chamado Majin Boo. Com a importante ajuda de Vegeta, Goku consegue destruir a parte má de Boo e a
		<br><strong><p= style="color:white">parte boa do mesmo se une a eles. Dez anos depois, em outro torneio de artes marciais, Goku encontra a  
		<br><strong><p= style="color:white">reencarnação humana de Boo, Oob. Ao fim da série, Goku leva Oob em uma jornada para treiná-lo como o próximo
		<br><strong><p= style="color:white">protetor da Terra.
		<!--Fim da Sinopse-->
	<tr>	
		<!--Inicio da(s) Temporada(s) -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Temporada(s)</big></big></strong><br>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="Dragon ball.php" class="btn btn-primary" role="button">Anterior</a>
		&ensp;<a href="Dragon ball GT.php" class="btn btn-primary" role="button"> Próxima</a>
		</th>
		<!--Fim da(s) Temporada(s)-->
	<tr>
		<!--Inicio dos episódios o anime  -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Episódios</big></big></strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball Z ep1.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Dragon Ball Z ep1.php"><p= style="color:white">Surge Um Mini-Goku! Seu Nome é Gohan<br>Episódio 1 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball Z ep2.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Dragon Ball Z ep2.php"><p= style="color:white">O Irmão Mais Velho De Goku<br>Episódio 2 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Dragon Ball Z ep3.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="Dragon Ball Z ep3.php"><p= style="color:white">A Combinação Mais Forte Deste Mundo<br>Episódio 3 
		<!--Fim dos episódios o anime  -->
</table>
	

</body>
</html>


	
