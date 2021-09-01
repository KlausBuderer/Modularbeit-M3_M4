<?php
require_once'../../model/extern/getextlernfortschritt.php';
use Model\Lerneinheit\GetLernfortschrittExt;

$fname = $_GET['vorname'];
$lname = $_GET['nachname'];

$GetLernfortschrittExt = new GetLernfortschrittExt($fname,$lname);
$GetLernfortschrittExt->getausgabejson($fname,$lname);

?>
