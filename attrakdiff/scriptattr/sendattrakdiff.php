<?php

    require 'DBEngine.php';


    $answer = array($_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4'], $_POST['a5'], $_POST['a6'], $_POST['a7'], $_POST['a8'],
                    $_POST['a9'], $_POST['a10'], $_POST['a11'], $_POST['a12'], $_POST['a13'], $_POST['a14'], $_POST['a15'], $_POST['a16'],                             $_POST['a17'], $_POST['a18'], $_POST['a19'], $_POST['a20'], $_POST['a21'], $_POST['a22'], $_POST['a23'], $_POST['a24'],
                    $_POST['a25'], $_POST['a26'], $_POST['a27'], $_POST['a28']);
    $username = "usertest";
    $study = "studytest";

    $db = new DBEngine();
    $db->connect();
    $db->selectDB();
    $db->putAttrakdiff($username, $study, $answer);
    $db->close();

?>
