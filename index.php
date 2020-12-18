<?php
session_start();
include("fonction.php");
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exo php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/accueil.css'>
    <script src='main.js'></script>
    <a href="index-old.html">Accueil</a><
</head>
<body>

<h1>EXO PHP </h1>




<?php
 MessageAccueille();
 Texte();
 Texte2("#FF00FF");

 $coloor = "#A3A55F";
 Texte2($coloor);


echo "Demarrage de la session <br>";
if(isset($_SESSION["nom"])) {
    echo"la session existe".$_SESSION["nom"];
}else{
    echo"La session exista pas";
    $_SESSION["nom"]="RobinP";
}



if(isset($_SESSION["NombreMagic"])) {
   
    if(isset($_GET["nombre"])){
        
       
        $nombre1=$_SESSION["NombreMagic"];
        $nombre2=$_GET["nombre"];
        echo "nombre 1 est :". $nombre1;
        if($nombre1==$nombre2){
            echo '<div class = "vert">'.$nombre1.'bien jouer tu peux rejouer </div>';
            $_SESSION["NombreMagic"]=rand(1,10000);
            echo"Le nombre magic a ete  re-creer";

        }else if($nombre1<$nombre2){
            echo '<div class="rouge">'.$nombre2. 'est trop grand </div>';
        }else{
            echo '<div class="rouge">'.$nombre2. 'est trop petit </div>';
        }
            
    } else{
         
        echo'<div class =" ">Veuillez entrez un nombre</div>';

    }

  
        }
    

 else{
    echo"Le nombre magic va etre creer";
    $_SESSION["NombreMagic"]=rand(1,10000);

    
}

  
?><form action="" method="get">
<label for="name">Entrez une Valeur:</label>

<input type="text" id="name" name="nombre" required
    minlength="1" maxlength="8" size="10" >
<div>
<button> Envoyer </button>
</form>

</body>
</html>


























      