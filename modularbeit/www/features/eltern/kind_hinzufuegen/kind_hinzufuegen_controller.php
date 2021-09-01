<?php
require_once('../../../public/header.php');
require_once('../../../public/navbar_eltern.php');
require_once('../../../public/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');

// Ermittelter Werte (ElternID, angemeldeter Benutzer
$eltern_id = $user->data()->id;

// Übernahme aus Formular
$username = test_input($_POST['username']);
$email = test_input($_POST['email']);
$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$password = test_input($_POST['password']);

//Eingabevalidierung
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   $data = preg_replace("/=/", "=\"\"", $data);
   $data = preg_replace("/&quot;/", "&quot;\"", $data);
   $tags = "/&lt;(\/|)(\w*)(\ |)(\w*)([\\\=]*)(?|(\")\"&quot;\"|)(?|(.*)?&quot;(\")|)([\ ]?)(\/|)&gt;/i";
   $replacement = "<$1$2$3$4$5$6$7$8$9$10>";
   $data = preg_replace($tags, $replacement, $data);
   $data = preg_replace("/=\"\"/", "=", $data);
   return $data;
 }


if (isset($_POST['gender']))
{

   switch ($_POST['gender']) 
   {

      case 'M':   $gender = 'M';
                         break;

      case 'J':   $gender = 'J';
                         break;

   }
} 

// Verprüfung Formular / Benutzername / E-Mail

$CreateKindKonto = new CreateKindKonto($username, $fname, $lname, $email, $password, $eltern_id, $gender);
$CreateKindKonto->setkontokind($username, $fname, $lname, $email, $password, $eltern_id, $gender);

echo '<form id="myForm" action="kind_hinzufuegen_erfolgreich.php" method="post">';

echo '<input type="hidden" name="status" value="'. $CreateKindKonto->getStatus().'">';
echo '<input type="hidden" name="fname" value="'. $fname.'">';

echo  '</form>';
echo '<script type="text/javascript">';
echo "document.getElementById('myForm').submit()";
echo '</script>';




