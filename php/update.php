<!DOCTYPE html>
<html>
<head>
   <meta charset='utf=8'>
   <title> CRUD MEDCIN </title>
   <link ref='stylesheet' type='text/css' media='screen' href='main.css'>
   </head>
   <body>
      
        <?php

          if(isset($_GET["idUpdate"])){
              $idUpadate = $_GET["idUpdate"];
              echo"<h1> Modifier Medecin   </h1>";*

          }else{
            echo"Aucun Medecn a modifier";
          }

          ?>