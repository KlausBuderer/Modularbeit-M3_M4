<?php
require_once('../../../includes/header.php');
require_once('../../../includes/navbar_eltern.php');
require_once('../../../includes/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');
require_once('../../../model/benutzerverwaltung/setkindgenerell.php');
require_once('../../../users/classes/User.php');
//Klasse der Bearbeitung des Hinzufügen eines Kindes

// Ermittlung ID des angemeldeten Benutzers
//     'oauth_tos_accepted' => true
// $id_vater = $user->data()->id;


$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$lname = $_POST['lname'];
$language = 'de-DE';


$theNewId = $user->create(array(
    'username' =>Input::get('username'),
    'fname' => ucfirst(Input::get('fname')),
    'lname' => ucfirst(Input::get('lname')),
    'email' => Input::get('email'),
    'password' => password_hash(Input::get('password', true), PASSWORD_BCRYPT, array('cost' => 12)),
    'permissions' => 1,
    'account_owner' => 1,
    'join_date' => date('Y-m-d H:i:s'),
    'vericode' => randomstring(15),
    // 'vericode_expiry=>date("Y-m-d H:i:s",strtotime("+$settings->join_vericode_expiry hours",strtotime(date("Y-m-d H:i:s")))),
    'oauth_tos_accepted' => true ));
// $echo('$theNewId');
?>