<?php
require_once'../../model/extern/getextlernfortschritt.php';
use Model\Lerneinheit\GetLernfortschrittExt;

$fname = test_input($_GET['vorname']);
$lname = test_input($_GET['nachname']);


//Eingabevalidierung
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$GetLernfortschrittExt = new GetLernfortschrittExt($fname,$lname);
$GetLernfortschrittExt->getausgabejson($fname,$lname);

?>
