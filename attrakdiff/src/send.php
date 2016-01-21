<?php

    require './../../script/DBEngine.php';


    /*$answer = array($_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4'], $_POST['a5'], $_POST['a6'], $_POST['a7'], $_POST['a8'],
                    $_POST['a9'], $_POST['a10'], $_POST['a11'], $_POST['a12'], $_POST['a13'], $_POST['a14'], $_POST['a15'], $_POST['a16'],                             $_POST['a17'], $_POST['a18'], $_POST['a19'], $_POST['a20'], $_POST['a21'], $_POST['a22'], $_POST['a23'], $_POST['a24'],
                    $_POST['a25'], $_POST['a26'], $_POST['a27'], $_POST['a28']);
    $username = "usertest";
    $study = "studytest";

    $db = new DBEngine();
    $db->connect();
    $db->selectDB();
    $db->putAttrakdiff($username, $study, $answer);
    $db->close();*/
    $sb1 = $_GET["sb1"];
    $sb2 = $_GET["sb2"];
    $sb3 = $_GET["sb3"];

    echo $sb1."<br>".$sb2."<br>".$sb3."<br>";
    var_dump($sb1);
    echo "<br>";

    echo "********** elaboro dati pagina 1 ******************** <br>";
    $tok = strtok($sb1, "{\":,");
    $i = 0;
    $j = 0;
    $data1 = array();
    while ($tok !== false)
    {
        echo $i." Word = $tok<br/>";
        if(($i%2)!=0)
        {
            $data1[$j] = $tok;
            $j++;
        }
        $tok = strtok("{\":,}");
        $i++;
    }

    for($i=0;$i<count($data1);$i++)
    {
        echo $i." -> ".$data1[$i]."<br>";
    }

    echo "<br><br>";
    echo "********** elaboro dati pagina 2 ******************** <br>";
    $tok = strtok($sb2, "{\":,");
    $i = 0;
    $j = 0;
    $data2 = array();
    while ($tok !== false)
    {
        echo $i." Word = $tok<br/>";
        if(($i%2)!=0)
        {
            $data2[$j] = $tok;
            $j++;
        }
        $tok = strtok("{\":,}");
        $i++;
    }

    for($i=0;$i<count($data2);$i++)
    {
        echo $i." -> ".$data2[$i]."<br>";
    }

    echo "<br><br>";
    echo "********** elaboro dati pagina 2 ******************** <br>";
    $tok = strtok($sb3, "{\":,");
    $i = 0;
    $j = 0;
    $data3 = array();
    while ($tok !== false)
    {
        echo $i." Word = $tok<br/>";
        if(($i%2)!=0)
        {
            $data3[$j] = $tok;
            $j++;
        }
        $tok = strtok("{\":,}");
        $i++;
    }

    for($i=0;$i<count($data3);$i++)
    {
        echo $i." -> ".$data3[$i]."<br>";
    }

    echo "<br><br> Genero connessione al db <br>";
    $username = "usertest";
    $study = "studytest";

    $db = new DBEngine();
    $db->connect();
    $db->selectDB();

    echo "Preparo i dati <br>";
    $totransfer = array_merge($data1, $data2, $data3);

    echo "Dati preparati:<br>";
    for($i=0; $i<count($totransfer); $i++)
    {
         echo $i." -> ".$totransfer[$i]."<br>";
    }

    echo "<br>Preparo la query e la invio.<br>";
    $db->putAttrakdiff($username, $study, $totransfer);
    $db->close();
?>
