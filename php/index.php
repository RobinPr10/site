<DOCTYPE html>
<html>
<?php
$maBase=new PDO('mysql:host=192.168.65.24; dbname=clinique; charset=utf8','siteweb','siteweb');
$req="Select * from medecin";
//echo $req;
$LesDonneesBrutesDeLaBdd = $maBase->query($req);
?>

<head>
 
 <h1> clinique </h1>
 <table border  = "1">
    <thead>
        <tr>
            <th colspan="2">Medecin</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Modifier</td>
        </tr> 

        <?php 


        //recupération de l'id qui est modifié 
       
        
             
      while  ($TableauDeDonnee = $LesDonneesBrutesDeLaBdd->fetch())
      {  
        echo "<tr>";                               
        echo "<td>";
        if(isset($_POST["BoutonModifier"]) && $_POST["BoutonModifier"]==$TableauDeDonnee['id_medecin']){
            ?>
            <form action="" method="GET">
                <input type="text" name="nomchang">
            </form>
            </td>
            <td>
            <form action="" method="GET">
                <input type="text" name="prechang">
            </td>
            <?php
        }else{
            echo $TableauDeDonnee['nom']."</td>";
            echo "<td>".$TableauDeDonnee['prenom']."</td>";
        }
        ?>
        <td>
            <form action="" method="post">
                <input type="submit" value="M" name="BoutonModifier"/>
                <input type="hidden" value="<?php echo $TableauDeDonnee['id_medecin']?>" name="idMedecin"/>
            </form>
        </td>
        <?php
        echo "</tr>";
      }
         $LesDonneesBrutesDeLaBdd->closeCursor();
      ?>

         <form action="index.php" method="post">
        <div>
            <label for="name">Nom :</label>
             <input type="text" id="nom" name="user_nom">
            </div>
            <div>
             <label for="name">Prenom :</label>
             <input type="text" id="prenom" name="user_prenom">
             </div>
             <div class="button">
            <button type="submit">Envoyer le message</button>
         </div>      
    </form>       
            <?php
             if (isset($_POST["user_nom"]) && isset($_POST["user_prenom"])){

                echo "Le nom est : ".$_POST["user_nom"]; 
                echo "Le prenom est :".$_POST["user_prenom"];
                $req='INSERT INTO `medecin`( `nom`, `prenom`) VALUES ("'.$_POST["user_nom"].'","'.$_POST["user_prenom"].'")';
                $maBase->query($req);

             }
             else{
                 echo "le formulaire existe pas";
             }
             


            ?>
       
             
    </tbody>
</table>
 </head>
