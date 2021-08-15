<?php
require_once('../../../includes/header.php');
require_once('../../../includes/navbar_eltern.php');
require_once('../../../includes/sidebar_eltern.php');
require_once('../../../model/benutzerverwaltung/setkindkonto.php');
require_once('../../../model/benutzerverwaltung/setkindgenerell.php');

//Klasse der Bearbeitung des Hinzufügen eines Kindes

// Ermittlung ID des angemeldeten Benutzers
$id_vater = $user->data()->id;

// Tabelle USERS
// id -> wird nicht übergeben
$id = "";                                                                       //Primary Key / Not Null / AutoIncrement
$permissions = "3";                                                             //Not Null
$email = $_POST['email'];                                                       //Not Null
$email_new = "NULL";
$username = $_POST['username'];                                                 //Not Null
$password = "";
$pin = "NULL";
$fname = $_POST['fname'];                                                       //Not Null 
$lname = $_POST['lname'];                                                       //Not Null
$language = "de-DE";
$email_verified = "1";                                                          //Not Null
$vericode = "";
$vericode_expiry = "2021-08-01 19:18:02";
$oauth_provider = "NULL";
$oauth_uid = "NULL";
$gender = "M";  // zu korrigieren                                               //Not Null
$locale = "NULL";                                                               //Not Null
$gpluslink = "NULL";        
$account_owner = "1";                                                           //Not Null
$account_id = "0";                                                              //Not Null
$account_mgr = "0";                                                             //Not Null
$fb_uid = "NULL";
$picture = "NULL";
$created = "0000-00-00 00:00:00";                                               //Not Null
$protected = "0";                                                               //Not Null
$msg_exempt = "0";                                                              //Not Null
$dev_user = "0";                                                                //Not Null
$msg_notification = "1";                                                        //Not Null
$cloak_allowed = "0";                                                           //Not Null
$oauth_tos_accepted = "1";
$un_changed = "0";                                                              //Not Null
$force_pr = "0";                                                                //Not Null
$logins = "0";                                                                  //Not Null
$last_login = "2021-01-01 00:00:00";                                            //Not Null
$join_date = "";
$modified = "NULL";
$active = "1";

// Tabelle PROFILES
// id -> wird nicht übergeben
$id ="";
$user_id = "100";
$bio = "test";
$kind = "3";
$geschlecht = "M";
$le_englisch = "X";
$le_deutsch = "X";
$le_mathematik = "X";
$le_realien = "X";
$le_bld_profil = "";
$le_bld_avatar = "";
$punkte = "0";
$guthaben = "0";

// Tabelle LE_ELTERN_KIND_MATCHES
// id -> wird nicht übergeben
$kind_id = "123444";
$eltern_id = "321";

// Tabelle PERMISSION_PAGE_MATCHES
// id -> wird nicht übergeben
$permission_id = "";
$page_id = "";


// $SetKindKonto = new setkindkonto($id,$permissions,$email,$email_new,$username,$password,$pin,$fname,$lname,$language,$email_verified,$vericode,$vericode_expiry,$oauth_provider,$oauth_uid,$gender,$locale,$gpluslink,$account_owner,$account_id,$account_mgr,$fb_uid,$picture,$created,$protected,$msg_exempt,$dev_user,$msg_notification,$cloak_allowed,$oauth_tos_accepted,$un_changed,$force_pr,$logins,$last_login,$join_date,$modified,$active);
// $SetKindKonto->setkindusertabelle($id,$permissions,$email,$email_new,$username,$password,$pin,$fname,$lname,$language,$email_verified,$vericode,$vericode_expiry,$oauth_provider,$oauth_uid,$gender,$locale,$gpluslink,$account_owner,$account_id,$account_mgr,$fb_uid,$picture,$created,$protected,$msg_exempt,$dev_user,$msg_notification,$cloak_allowed,$oauth_tos_accepted,$un_changed,$force_pr,$logins,$last_login,$join_date,$modified,$active);

// $SetKindGenerell = new SetKindGenerell($id,$user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben,$kind_id,$eltern_id,$permission_id,$page_id);
// $SetKindGenerell->setkindprofil($id,$user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben);

$SetKindGenerell = new SetKindGenerell($id,$user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben,$kind_id,$eltern_id,$permission_id,$page_id);
$SetKindGenerell->setkindmatcheseltern($id, $kind_id,$eltern_id);


// $setkindkonto->setkindprofil($id,$user_id,$bio,$kind,$geschlecht,$le_englisch,$le_deutsch,$le_mathematik,$le_realien,$le_bld_profil,$le_bld_avatar,$punkte,$guthaben);

//$setkindeleternmatch = new setkindelternmatch($kind_id,$eltern_id);
// $setkindeleternmatch->setkindeleternmatch($kind_id,$eltern_id);