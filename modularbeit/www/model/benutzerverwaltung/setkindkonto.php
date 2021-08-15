<?php
require_once 'dbconnection.php';

// Klasse zur Erstellung der Grunddaten zum Kind

class SetKindKonto {

  public function __construct($id,$permissions,$email,$email_new,$username,$password,$pin,$fname,$lname,$language,$email_verified,$vericode,$vericode_expiry,$oauth_provider,$oauth_uid,$gender,$locale,$gpluslink,$account_owner,$account_id,$account_mgr,$fb_uid,$picture,$created,$protected,$msg_exempt,$dev_user,$msg_notification,$cloak_allowed,$oauth_tos_accepted,$un_changed,$force_pr,$logins,$last_login,$join_date,$modified,$active)
{
$this->id = $id;
$this->permissions = $permissions;
$this->email = $email;
$this->email_new = $email_new;
$this->username = $username;
$this->password = $password;
$this->pin = $pin;
$this->fname = $fname;
$this->lname = $lname;
$this->language = $language;
$this->email_verified = $email_verified;
$this->vericode = $vericode;
$this->vericode_expiry = $vericode_expiry;
$this->oauth_provider = $oauth_provider;
$this->oauth_uid = $oauth_uid;
$this->gender = $gender;
$this->locale = $locale;
$this->gpluslink = $gpluslink;
$this->account_owner = $account_owner;
$this->account_id = $account_id;
$this->account_mgr = $account_mgr;
$this->fb_uid = $fb_uid;
$this->picture = $picture;
$this->created = $created;
$this->protected = $protected;
$this->msg_exempt = $msg_exempt;
$this->dev_user = $dev_user;
$this->msg_notification = $msg_notification;
$this->cloak_allowed = $cloak_allowed;
$this->oauth_tos_accepted = $oauth_tos_accepted;
$this->un_changed = $un_changed;
$this->force_pr = $force_pr;
$this->logins = $logins;
$this->last_login = $last_login;
$this->join_date = $join_date;
$this->modified = $modified;
$this->active = $active;
}

// Funktion zum Erstellen des neuen Datenbankeintrag für das neu angelegt Kind (Grundgerüst)
public function setkindusertabelle($id,$permissions,$email,$email_new,$username,$password,$pin,$fname,$lname,$language,$email_verified,$vericode,$vericode_expiry,$oauth_provider,$oauth_uid,$gender,$locale,$gpluslink,$account_owner,$account_id,$account_mgr,$fb_uid,$picture,$created,$protected,$msg_exempt,$dev_user,$msg_notification,$cloak_allowed,$oauth_tos_accepted,$un_changed,$force_pr,$logins,$last_login,$join_date,$modified,$active)
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO USERS(id,permissions,email,email_new,username,password,pin,fname,lname,language,email_verified,vericode,vericode_expiry,oauth_provider,oauth_uid,gender,locale,gpluslink,account_owner,account_id,account_mgr,fb_uid,picture,created,protected,msg_exempt,dev_user,msg_notification,cloak_allowed,oauth_tos_accepted,un_changed,force_pr,logins,last_login,join_date,modified,active)
    VALUES ('$this->id','$this->permissions','$this->email','$this->email_new','$this->username','$this->password','$this->pin','$this->fname','$this->lname','$this->language','$this->email_verified','$this->vericode','$this->vericode_expiry','$this->oauth_provider','$this->oauth_uid','$this->gender','$this->locale','$this->gpluslink','$this->account_owner','$this->account_id','$this->account_mgr','$this->fb_uid','$this->picture','$this->created','$this->protected','$this->msg_exempt','$this->dev_user','$this->msg_notification','$this->cloak_allowed','$this->oauth_tos_accepted','$this->un_changed','$this->force_pr','$this->logins','$this->last_login','$this->join_date','$this->modified','$this->active');";
  $result = mysqli_query($conn, $sql);
  }
}
?>