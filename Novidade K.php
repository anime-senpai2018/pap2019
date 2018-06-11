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

    </div>
    </ul>
  </div>
</nav>
<body>
<table bordeer="0" align="left">
	<tr>
		<th><br><br><br><strong><big><big><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Trailer de K:Seven Stories </big></big></strong>
		<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 18 , Abril , 2018
	<tr>
		<th><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<iframe width="854" height="480" src="https://www.youtube.com/embed/9BdxgXo-X1s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<tr>	
		<br><th><br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A King Records começou a exibir um trailer de K: Seven Stories, um projeto anime que vai ser exibido nos cinemas.
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; No vídeo podemos ouvir o tema “Seven Stories” pelos Angela.
		<br><br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Com estreia agendada para Julho de 2018 este projeto anime de seis episódios tem as seguintes datas de exibição:
                                <br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 1 - estreia dia 7 de Julho ;
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 2 - estreia dia 4 de Agosto ;
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 3 - estreia dia 1 de Setembro ;
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 4 - estreia dia 6 de Outubro ;
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 5 - estreia dia 3 de Novembro ;
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   Episódio 6 - estreia dia 1 de Dezembro ;
		<br><br><br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Cada episódio vai acompanhar-se de um curto filme spinoff chamado The Idol K.
	<tr>
		<td><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="img/K-Seven-Stories.jpg" class="img-thumbnail" width="720" height="405">
	<tr>
		<br><th><br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; A direção e design de personagens é novamente de Shingo Suzuki (Mardock Scramble) e a animação é mais uma vez da 
		<br><strong><p= style="color:white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; responsabilidade do estúdio GoHands.
		<br>
		<br>
		
</body>
</html>