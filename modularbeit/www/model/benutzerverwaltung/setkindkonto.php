<?php
// include_once '../../lerneinheiten/dbconnection.php';


class SetKindKonto {

// Funktion zum Erstellen des neuen Datenbankeintrag für das neu angelegt Kind (Grundgerüst)
public function setkindusertab()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO USERS(id,permissions,email,email_new,username,password,pin,fname,lname,language,email_verified,vericode,vericode_expiry,oauth_provider,oauth_uid,gender,locale,gpluslink,account_owner,account_id,account_mgr,fb_uid,picture,created,protected,msg_exempt,dev_user,msg_notification,cloak_allowed,oauth_tos_accepted,un_changed,force_pr,logins,last_login,join_date,modified,active) 
  VALUES ('id','$this->permissions','$this->email','$this->email_new','$this->username','$this->password','$this->pin','$this->fname','$this->lname','$this->language','$this->email_verified','$this->vericode','$this->vericode_expiry','$this->oauth_provider','$this->oauth_uid','$this->gender','$this->locale','$this->gpluslink','$this->account_owner','$this->account_id','$this->account_mgr','$this->fb_uid','$this->picture','$this->created','$this->protected','$this->msg_exempt','$this->dev_user','$this->msg_notification','$this->cloak_allowed','$this->oauth_tos_accepted','$this->un_changed','$this->force_pr','$this->logins','$this->last_login','$this->join_date','$this->modified','$this->active');";
  $result = mysqli_query($conn, $sql);
  }
}

/*
// Funktion zum Erstellen des neuen Datenbankeintrag für das Profil für das neu angelegt Kind
public function setkindprofiltab()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO USERS(id,permissions,email,email_new,username,password,pin,fname,lname,language,email_verified,vericode,vericode_expiry,oauth_provider,oauth_uid,gender,locale,gpluslink,account_owner,account_id,account_mgr,fb_uid,picture,created,protected,msg_exempt,dev_user,msg_notification,cloak_allowed,oauth_tos_accepted,un_changed,force_pr,logins,last_login,join_date,modified,active) 
  VALUES ('id','$this->permissions','$this->email','$this->email_new','$this->username','$this->password','$this->pin','$this->fname','$this->lname','$this->language','$this->email_verified','$this->vericode','$this->vericode_expiry','$this->oauth_provider','$this->oauth_uid','$this->gender','$this->locale','$this->gpluslink','$this->account_owner','$this->account_id','$this->account_mgr','$this->fb_uid','$this->picture','$this->created','$this->protected','$this->msg_exempt','$this->dev_user','$this->msg_notification','$this->cloak_allowed','$this->oauth_tos_accepted','$this->un_changed','$this->force_pr','$this->logins','$this->last_login','$this->join_date','$this->modified','$this->active');";
  $result = mysqli_query($conn, $sql);
  }
}
*/

//Funktion zum Erstellen des neuen Datenbankeintrag für das Profil für das neu angelegt Kind
/*
public function setkindprofiltab()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO USERS(id,permissions,email,email_new,username,password,pin,fname,lname,language,email_verified,vericode,vericode_expiry,oauth_provider,oauth_uid,gender,locale,gpluslink,account_owner,account_id,account_mgr,fb_uid,picture,created,protected,msg_exempt,dev_user,msg_notification,cloak_allowed,oauth_tos_accepted,un_changed,force_pr,logins,last_login,join_date,modified,active) 
  VALUES ('id','$this->permissions','$this->email','$this->email_new','$this->username','$this->password','$this->pin','$this->fname','$this->lname','$this->language','$this->email_verified','$this->vericode','$this->vericode_expiry','$this->oauth_provider','$this->oauth_uid','$this->gender','$this->locale','$this->gpluslink','$this->account_owner','$this->account_id','$this->account_mgr','$this->fb_uid','$this->picture','$this->created','$this->protected','$this->msg_exempt','$this->dev_user','$this->msg_notification','$this->cloak_allowed','$this->oauth_tos_accepted','$this->un_changed','$this->force_pr','$this->logins','$this->last_login','$this->join_date','$this->modified','$this->active');";
  $result = mysqli_query($conn, $sql);
  }
}




/* public function setkind()
{
    $connection = new DbConnection();
    $conn = $connection->buildConnection();

  $sql =  "INSERT INTO le_lernfortschritt(userid, datum, lerneinheit, anzfragengesamt, anzfragenkorrekt, vorzeitabbruch, gewichtung, punkteerreicht, beschreibung) 
  VALUES ('$this->userId', '$this->date', '$this->lerneinheit', '$this->anzFragen', '$this->anzRichtige', '$this->abbruch', '$this->stufe', '$this->punkte', '$this->lernmodul');";
  $result = mysqli_query($conn, $sql);


  'id','$this->permissions','$this->email','$this->email_new','$this->username','$this->password','$this->pin','$this->fname','$this->lname','$this->language','$this->email_verified','$this->vericode','$this->vericode_expiry','$this->oauth_provider','$this->oauth_uid','$this->gender','$this->locale','$this->gpluslink','$this->account_owner','$this->account_id','$this->account_mgr','$this->fb_uid','$this->picture','$this->created','$this->protected','$this->msg_exempt','$this->dev_user','$this->msg_notification','$this->cloak_allowed','$this->oauth_tos_accepted','$this->un_changed','$this->force_pr','$this->logins','$this->last_login','$this->join_date','$this->modified','$this->active'
*/

// Rückgabe ID

/*

Parameters ¶
link_identifier
The MySQL connection. If the link identifier is not specified, the last link opened by mysql_connect() is assumed. If no such link is found, it will try to create one as if mysql_connect() had been called with no arguments. If no connection is found or established, an E_WARNING level error is generated.

Return Values ¶
The ID generated for an AUTO_INCREMENT column by the previous query on success, 0 if the previous query does not generate an AUTO_INCREMENT value, or false if no MySQL connection was established.

Examples ¶
Example #1 mysql_insert_id() example


<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('mydb');

mysql_query("INSERT INTO mytable (product) values ('kossu')");

// dieser Teil implementieren !!!
printf("Last inserted record has id %d\n", mysql_insert_id());
?>

*/