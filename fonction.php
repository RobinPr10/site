<?php 
    
    function MessageAccueille(){
        $text = "sur mon site";
        ?><h1> Bienvenu 

        <?php
         echo $text."</h1>";
        
    }


?>
<?php 
    
    function Texte(){
        $text = "Ma premiére ligne en avec une div";
        ?><div class= "test"> C'est :

        <?php
         echo $text."</div>";
        
    }


?>
<?php 
    
    function Texte2($couleur){
        $text = "Ma premiére ligne en couleur";
        ?><div style="background:<?php echo $couleur?> "> test

        <?php
         echo $text."</div>";
        
    }


?>

<?php 
    
    function Texte2($a,$b){
        $calcule = "";
        ?><div style="background:<?php echo $a,$b?> "> test

        <?php
         echo $text."</div>";
        
    }


?>
