<?php
session_start();
setcookie("username","fernando",time()+60);
$_SESSION["username"]="lolito";
$_SESSION["authuser"]=0;
?>
<html
 <head>
  <title>Mi equipo favorito es:</title>
 </head>
 <body>

<form method="post" action="get.php?favmovie=Barca&favnom=pau&favdia=21&fname=pau";

   <p>Dime tu nombre : 
    <input type="text" name="nombre"/>
   </p>
   <p>Dime tu apellido: 
    <input type="text" name="apellido"/>
   </p>
   <p>Dime tu edad: 
    <input type="number" name="edad"/>
   </p>
   <p>
    <input type="submit" name="enviar" value="enviar"/>
   </p>
 </form>
<?php
echo "<a href='get.php?favmovie=Barca&favnom=pau&favdia=21&fname=pau'>";
echo "Clica para ver los ejercicios"; 
echo "</a>";
?>



 </body>
</html>
