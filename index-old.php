<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<h1>EXO PHP </h1>
<form action="index.php" method="get">
    <label for="name">Entrez une Valeur:</label>

    <input type="text" id="name" name="nombre" required
        minlength="1" maxlength="8" size="10">
    <div>
    <button> Envoyer </button>
</form>

<?php
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

        if($nombre1==$nombre2){
            echo '<div class = vert>'.$nombre1.'bien jouer tu peux rejouer </div>';
            $_SESSION["NombreMagic"]=rand(1,10);
            echo"Le nombre magic a ete  creer";

        }else{
            echo '<div class= rouge>'.$nombre2. 'est pas bon </div>';
        }
            
    }
    
    }
    
  
    if(isset($_GET["NombreALT"])){
        
        
        $nombre1=$_SESSION["NombreMagic"];
        $nombre2=$_GET["nombre"];

        if($nombre1==$nombre2){
            echo '<div class = vert>'.$nombre1.'bien jouer </div>';
            $_SESSION["NombreMagic"]=rand(1,10);
            echo"Le nombre magic a ete  creer";
            if($nombre2>$nombre1){
                echo '<div class = rouge>'.$nombre1 'moins</div>';
                if$($nombre2<$nombre1){
                echo '<div class= rouge>'.$nombre1 'plus</div>';
                }
            }


        }else{
            echo '<div class= rouge>'.$nombre2. 'est pas bon </div>';
        }
            
    }
    
    

}else{
    echo"Le nombre magic va etre creer";
    $_SESSION["NombreMagic"]=rand(1,10);

   
}






    

   
?>

</body>
</html>


























      