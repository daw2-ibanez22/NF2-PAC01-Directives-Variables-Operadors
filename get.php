<?php
session_start();
//Check username and password information
if ($_SESSION['authuser'] = 0){
    echo "lo siento no tienes no tienes permisoe";
    exit();     
}
?>
<html>
 <head>
  <title>My Movie Site <?php echo $_GET['favmovie'];?></title>
 </head>
 <body>
<?php 
echo "el valor de la cookie es : ";
echo $_COOKIE["username"];
echo "<br/>";
echo "hola  ";
echo $_GET["favmovie"]; 
?>
</br>
</br>
<?php
echo "Esta es un GET VARRIABLE  </br> ";
echo "Mi equipo favorito es  ";
echo $_GET['favmovie'];
echo "! <br/>";
$movierate = 5;
echo "Le doy una calificcaion de  ";
echo $movierate;
?>
</br>
</br>
<?php
echo "Estas son las sesionss </br> ";
echo "1r SESSION </br> ";
echo "hola, ";
echo $_SESSION["username"];
echo "! <br/>";
echo "Mi equipo de futbol es  ";
echo $_GET['favmovie'];
echo "! <br/>";
$movierate = 9;
echo "Le pongo de nota un  ";
echo $movierate;
?>
</br>
</br>
<?php
echo "2n SESSION </br> ";
echo "Que tal ";
echo $_SESSION["username"];
echo "! <br/>";
echo "Me llamo  ";
echo $_GET['favnom'];
$movierate = 19;
echo " y  tengo $movierate anyos";
?>
</br>
</br>
<?php
echo "3ra SESSION </br> ";
echo "Buenas  ";
echo $_SESSION["username"];
echo "! <br/>";
echo "Mi numero favorito es el   ";
echo $_GET['favdia'];
?>
</br>
</br>

<?php
echo "Estos son POST";
echo "<br/>";

echo "Nombre: ";
$n1 = $_POST ["nombre"] ?? "no hay nada";
echo $n1;
echo "<br/>";

echo "Apellido: ";
$n2 = $_POST ["apellido"]?? "no hay nada";
echo $n2;
echo "<br/>";

echo "Edad: ";
$n3 = $_POST ["edad"]?? "no hay nada";
echo $n3;
echo "<br/>";
?>

</br>
</br>


<?php
echo "Este mes tiene";
date_default_timezone_set('Europe/Madrid');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '29 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }

echo "dias";
?>





 </body           