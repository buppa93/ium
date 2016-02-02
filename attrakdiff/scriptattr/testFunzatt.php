<!DOCTYPE html>
<html>
    <body>
        <?php
        require ('./calculateattrakdiff.php');

        $provaAtt = array(2,5,2,2,3,4,5);
       // $lunghezza=count($provaAtt);
        $prova = new CalculateAttrakdiff();
        $testMedia=$prova->media($provaAtt);
        $testmedianormalizzata=$prova->medianormalizzata($provaAtt);
        for($x=0;$x<count($provaAtt);$x++)
            {
                echo $provaAtt[$x];
                echo "<br>";
            }
        echo "la media è:".$testMedia;
        echo "<br>";
        echo "la media normalizzata è:".$testmedianormalizzata;
        echo "<br>";
        $attrak=array
            (
            array(2,5,5,5,5,6,5,6,5,4,4,4,5,5,5,5,4,5,6,6,4,4,5,5,3,4,5,6),
            array(5,1,6,5,4,4,5,5,5,4,4,5,5,5,6,6,6,6,6,5,4,4,5,4,5,5,5,5),
            array(2,5,4,5,5,7,1,2,5,4,3,6,3,5,7,4,5,5,5,6,4,4,3,5,6,5,5,6),
            array(2,7,4,4,3,3,3,4,5,3,2,4,4,6,6,4,4,5,4,5,3,4,6,4,4,5,6,5),
            array(3,7,6,6,6,6,4,7,6,2,4,3,3,6,4,6,6,6,6,6,5,3,7,6,3,6,6,6),
            array(4,7,7,6,7,4,7,7,6,6,6,6,6,7,1,6,7,6,7,6,6,5,6,6,6,7,6,7),
            array(5,6,4,6,5,4,3,6,6,6,6,4,3,6,5,5,5,6,6,5,5,5,6,6,3,5,5,5)
            );

        for ($row = 0; $row <7; $row++)
        {
            //echo "<p><b>Row number $row</b></p>";
            //echo "<ul>";
            echo "<br>";
            for ($col = 0; $col <28; $col++)
            {
                echo $attrak[$row][$col];
                echo " ";
            }
          //  echo "</ul>";
        }
        $testpq=$prova->pq($attrak);
        echo "<br> <br>";
        echo "il pq è:".$testpq;

        $testhqi=$prova->hqi($attrak);
        echo "<br> <br>";
        echo "l'hqi è:".$testhqi;

        $testhqs=$prova->hqs($attrak);
        echo "<br> <br>";
        echo "l' hqs è:".$testhqs;

        $testatt=$prova->att($attrak);
        echo "<br> <br>";
        echo "l' att è:".$testatt;
        ?>
    </body>
</html>
