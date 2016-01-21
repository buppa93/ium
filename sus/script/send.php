<?php
    /*require('./DBEngine.php');*/
    require './../../script/DBEngine.php';


    $answer = array($_POST['a1'], $_POST['a2'], $_POST['a3'], $_POST['a4'], $_POST['a5'], $_POST['a6'], $_POST['a7']
                   , $_POST['a8'], $_POST['a9'], $_POST['a10']);
    $username = "usertest";
    $study = "studytest";

    $db = new DBEngine();
    $db->connect();
    $db->selectDB();
    $db->putSUS($username, $study, $answer);
    $db->close();

?>
