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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;
}
</style>
</head>
<body background="img\back_black_2.jpg" type="text/css" href="css/carousel.css">

<br>

<div class="container">
  <h2 style="color:white">Procurar ...</h2>
  <p style="color:white">Encontre os seus animes favoritos de forma mais facil e rapida</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Procurar..">
  <br>
  <table style="width:100%" id="t01">
    <thead>
      <tr>
        <th><a style="color:white" target="#">Anime</a></th>
        <th><a style="color:white" target="#">Autor</a></th>
        <th><a style="color:white" target="#">Estudio</a></th>
        <th><a style="color:white" target="#">Direcao</a></th>
        <th><a style="color:white" target="#">Ano</a></th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td><a style="color:white" class="nav-link" href="bleach.php" target="#">Bleach</a></td>
        <td><a style="color:white" class="nav-link" href="bleach.php" target="#">Tite Kubo</a></td>
        <td><a style="color:white" class="nav-link" href="bleach.php" target="#">Studio Pierrot</a></td>
        <td><a style="color:white" class="nav-link" href="bleach.php" target="#">Noriyuki Abe</a></td>
        <td><a style="color:white" class="nav-link" href="bleach.php" target="#">2004</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="blue dragon.php" target="#">Blue Dragon</a></td>
        <td><a style="color:white" class="nav-link" href="blue dragon.php" target="#">Yamatoya, Akatsuki</a></td>
        <td><a style="color:white" class="nav-link" href="blue dragon.php" target="#">Studio Pierrot</a></td>
        <td><a style="color:white" class="nav-link" href="blue dragon.php" target="#">Matsushita, Yukihiro</a></td>
        <td><a style="color:white" class="nav-link" href="blue dragon.php" target="#">2007</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="dragon ball.php" target="#">Dragon Ball</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball.php" target="#">Akira Toriyama </a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball.php" target="#">Toei Animation, Bird Studio</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball.php" target="#">Minoru Okazaki, Daisuke Nishio</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball.php" target="#">1986</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="dragon ball Z.php" target="#">Dragon Ball Z</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball Z.php" target="#">Akira Toriyama</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball Z.php" target="#">Toei Animation, Bird Studio</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball Z.php" target="#">Minoru Okazaki, Daisuke Nishio</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball Z.php" target="#">1989</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="dragon ball gt.php" target="#">Dragon Ball GT</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball gt.php" target="#">Akira Toriyama</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball gt.php" target="#">Toei Animation, Bird Studio</a></td>
        <td><a style="color:white" class="nav-link" href="dragon ball gt.php" target="#">Minoru Okazaki, Daisuke Nishio</a></td>
        <td><a style="color:white"class="nav-link" href="dragon ball gt.php" target="#">1996</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="Fairy Tail.php" target="#">Fairy Tail</a></td>
        <td><a style="color:white" class="nav-link" href="Fairy Tail.php" target="#">Hiro Mashima</a></td>
        <td><a style="color:white" class="nav-link" href="Fairy Tail.php" target="#">A-1 Pictures, Satelight</a></td>
        <td><a style="color:white" class="nav-link" href="Fairy Tail.php" target="#">Shinji Ishihira</a></td>
        <td><a style="color:white" class="nav-link" href="Fairy Tail.php" target="#">2009</a></td>
      </tr>      
       <tr>
        <td><a style="color:white" class="nav-link" href="Hunter X Hunter .php" target="#">Hunter x Hunter</a></td>
        <td><a style="color:white" class="nav-link" href="Hunter X Hunter .php" target="#">Nobuaki Kishima</a></td>
        <td><a style="color:white" class="nav-link" href="Hunter X Hunter .php" target="#">Nippon Animation</a></td>
        <td><a style="color:white" class="nav-link" href="Hunter X Hunter .php" target="#">Kazuhiro Furuhashi</a></td>
        <td><a style="color:white" class="nav-link" href="Hunter X Hunter .php" target="#">1999</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="naruto.php" target="#">Naruto</a></td>
        <td><a style="color:white" class="nav-link" href="naruto.php" target="#">Masashi Kishimoto</a></td>
        <td><a style="color:white" class="nav-link" href="naruto.php" target="#">Studio Pierrot</a></td>
        <td><a style="color:white" class="nav-link" href="naruto.php" target="#">Hayato Date</a></td>
        <td><a style="color:white" class="nav-link" href="naruto.php" target="#">2002</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="Naruto Shippuden.php" target="#">Naruto Shippuden</a></td>
        <td><a style="color:white" class="nav-link" href="Naruto Shippuden.php" target="#">Masashi Kishimoto</a></td>
        <td><a style="color:white" class="nav-link" href="Naruto Shippuden.php" target="#">Studio Pierrot</a></td>
        <td><a style="color:white" class="nav-link" href="Naruto Shippuden.php" target="#">Hayato Date</a></td>
        <td><a style="color:white" class="nav-link" href="Naruto Shippuden.php" target="#">2007</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="One piece.php" target="#">One piece</a></td>
        <td><a style="color:white" class="nav-link" href="One piece.php" target="#">Eiichiro Oda</a></td>
        <td><a style="color:white" class="nav-link" href="One piece.php" target="#">Toei Animation</a></td>
        <td><a style="color:white" class="nav-link" href="One piece.php" target="#">Konosuke Uda</a></td>
        <td><a style="color:white" class="nav-link" href="One piece.php" target="#">1999</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh.php" target="#">Yu-Gi-Oh!</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh.php" target="#">Kazuki Takahashi</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh.php" target="#">Studio Gallop, Nihon Ad Systems</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh.php" target="#">Kunihisa Sugishima</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh.php" target="#">2000</a></td>
      </tr>
      <tr>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh gx.php" target="#">Yu-Gi-Oh! GX</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh gx.php" target="#">Naoyuki Kageyama</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh gx.php" target="#">Studio Gallop, Nihon Ad Systems</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh gx.php" target="#">Hatsuki Tsuji</a></td>
        <td><a style="color:white" class="nav-link" href="Yu-Gi-Oh gx.php" target="#">2004</a></td>
      </tr>
    </tbody>
  </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>