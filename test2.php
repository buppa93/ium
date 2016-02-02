<!DOCTYPE html>
<html>
    <body>
         <?php
        require ('./script/calculateSUS.php');

        $provadev = array(72.5, 70.0, 57.5, 72.5, 60.0, 95.0, 72.5, 67.5, 67.5, 67.5, 55.0, 75.0, 55.0);
    $prova=new CalculateSUS();
    $devstandard= $prova->devst($provadev);

    echo "la st dev è:".$devstandard;

    $confidenza= $prova->confidenza($provadev);
    echo "<br>la confidenza è:".$confidenza;

    $upper= $prova->upper($provadev);
    echo "<br>Upper CI bound è: ".$upper;

     $lower= $prova->lower($provadev);
    echo "<br>Lower CI bound è: ".$lower;
        ?>
    </body>

</html>
