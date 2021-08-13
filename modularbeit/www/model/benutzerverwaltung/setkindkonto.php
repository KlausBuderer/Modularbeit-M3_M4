<?php
include_once '../lerneinheiten/dbconnection.php';


class SetKindKonto {

//Funktion für das Schreiben der Daten in die Datenbank
public function setkindprofil()
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

/*
INSERT INTO `itwisse_lernplattform`.`users`
(`id`,
`permissions`,
`email`,
`email_new`,
`username`,
`password`,
`pin`,
`fname`,
`lname`,
`language`,
`email_verified`,
`vericode`,
`vericode_expiry`,
`oauth_provider`,
`oauth_uid`,
`gender`,
`locale`,
`gpluslink`,
`account_owner`,
`account_id`,
`account_mgr`,
`fb_uid`,
`picture`,
`created`,
`protected`,
`msg_exempt`,
`dev_user`,
`msg_notification`,
`cloak_allowed`,
`oauth_tos_accepted`,
`un_changed`,
`force_pr`,
`logins`,
`last_login`,
`join_date`,
`modified`,
`active`)
VALUES
(<{id: }>,
<{permissions: }>,
<{email: }>,
<{email_new: }>,
<{username: }>,
<{password: }>,
<{pin: }>,
<{fname: }>,
<{lname: }>,
<{language: en-US}>,
<{email_verified: 0}>,
<{vericode: }>,
<{vericode_expiry: }>,
<{oauth_provider: }>,
<{oauth_uid: }>,
<{gender: }>,
<{locale: }>,
<{gpluslink: }>,
<{account_owner: 1}>,
<{account_id: 0}>,
<{account_mgr: 0}>,
<{fb_uid: }>,
<{picture: }>,
<{created: }>,
<{protected: 0}>,
<{msg_exempt: 0}>,
<{dev_user: 0}>,
<{msg_notification: 1}>,
<{cloak_allowed: 0}>,
<{oauth_tos_accepted: }>,
<{un_changed: 0}>,
<{force_pr: 0}>,
<{logins: 0}>,
<{last_login: }>,
<{join_date: }>,
<{modified: }>,
<{active: 1}>);
*/