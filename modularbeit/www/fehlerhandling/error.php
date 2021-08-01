<!DOCTYPE html>
<html lang="de">
 <head>
  <meta charset="UTF-8">
  <title>Fehlerhafter Aufruf der Webseite</title>
<style>
 p.fehler {
  background-color: #FFFFDF;
  padding: 15px;
 }
 </style>

 </head>
<body>

<?php
if (isset($_GET["error"])) {

 // Individuelle Fehlerausgabe
 switch ($_GET["error"]) {

  case "404":
   $meldung = 'Die aufgerufene Seite wurde nicht gefunden! Möglicherweise wurde die Seite vom Webmaster entfernt oder es ist ein Fehler am Webserver aufgetreten.';
   header("Location: http://www.modularbeit.ch");
   break;

  default:
  $meldung = 'Fehler am Webserver! Es ist ein Fehler am Webserver aufgetreten.';
 }
 // Ausgabe
 echo '<p id="fehler">' . $meldung . '. &mdash; Wir bitten um Entschuldigung!<br>';
}
?>


</body>
</html>