<?php
require_once'../../model/extern/getextlernfortschritt.php';

$fname = $_GET['vorname'];
$lname = $_GET['nachname'];

$GetLernfortschrittExt = new GetLernfortschrittExt($fname,$lname);
$GetLernfortschrittExt->getausgabejson($fname,$lname);

?>
