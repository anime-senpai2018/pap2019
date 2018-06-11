<?php
// Inicia a sesão
session_start();
header('Content-Type: text/html; charset=Windows-1252'); 
// Quando a sesão termina é redencionada para a pagina login
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  exit;
}
$idade = $_SESSION['idade'];
?>
<!DOCTYPE html>
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
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Bleach</big></big></strong>
	<tr>	
		<!--Inicio dos detalhes do Anime-->
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Bleach.jpg" width="250" height="300"><br>
		<th><strong><p= style="color:white"><br>&emsp;&emsp;&emsp;Formato:</strong><p= style="color:white"> Anime<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Género:</strong><p= style="color:white"> Ação , Comédia , Shounen , Sobrenatural , Superpoder <br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Autor:</strong><p= style="color:white"> Tite Kubo<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Direção:</strong><p= style="color:white"> Noriyuki Abe<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Estudio:</strong><p= style="color:white"> Studio Pierrot<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Tipo de Episódio:</strong><p= style="color:white"> Legendado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Episódios:</strong> <p= style="color:white"> 229<br>	 
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ovas:</strong> <p= style="color:white"> 0<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Filmes:</strong><p= style="color:white"> 0<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Status do Anime:</strong> Sendo upado<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Ano:</strong><p= style="color:white"> 2004<br>
		<strong><p= style="color:white">&emsp;&emsp;&emsp;Classificação:</strong><p= style="color:white"> 14 Anos
		<!--Fim dos detalhes do Anime-->
	<tr>
		<!--Inicio da Sinopse-->
		<th><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Sinopse:</big></big></strong>
		<th><br><br><br><strong><p= style="color:white">A história conta com Kurosaki Ichigo como personagem principal. Após uma série de incidentes ele acaba se   
		<br><strong><p= style="color:white">tornando um Shinigami,que são responsáveis pelo fluxo de almas do mundo real até a Soul Society, assim como 
		<br><strong><p= style="color:white">combater os espíritos malígnos, Hollows. Porém, conforme ele começa a se envolver com o mundo espiritual,   
		<br><strong><p= style="color:white">ele acaba no meio de uma trama que ameaça a existência de ambos os mundos.
		<!--Fim da Sinopse-->
	<tr>
<? if($idade <= 14){
	Echo "Sem idade";
}else{ ?>
<!--Inicio dos episódios o anime  -->
		<th><br><br><br><strong><big><big>&emsp;&emsp;&emsp;&emsp;&emsp;<p= style="color:white">&emsp;&emsp;&emsp;Episódios</big></big></strong>
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Bleach ep1.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">O Dia Em Que Me Tornei Um Shinigami<br>Episódio 1 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Bleach ep2.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">O Trabalho De Um Shinigami<br>Episódio 2 
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img\Bleach ep3.jpg" width="100" height="80"><br>
		<td><br><strong><a class="nav-link" href="#"><p= style="color:white">O Desejo do Irmão Mais Velho, o Desejo da Irmã Mais Nova<br>Episódio 3 
		<!--Fim dos episódios o anime  -->
<? } ?>	

</table>
	

</body>
</html>