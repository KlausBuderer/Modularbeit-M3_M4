<?php

require_once('../../../users/classes/User.php');


// Ermittelter Werte (ElternID, angemeldeter Benutzer
$eltern_id = $user->data()->id;



// Klasse zum Erstellen des Kind Kontos

class CreateKindKonto
{

    public function __construct($username, $fname, $lname, $email, $password)
    {
        $this->username = $username;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;

    }

// Funktion zum Anlegen eines Kind Kontos inklusive Befüllung Zusatztabelle

    public function setkontokind($username, $fname, $lname, $email, $password)
    {
        $theNewId = $user->create(array(
            'username' => Input::get('username'),
            'fname' => ucfirst(Input::get('fname')),
            'lname' => ucfirst(Input::get('lname')),
            'email' => Input::get('email'),
            'password' => password_hash(Input::get('password', true), PASSWORD_BCRYPT, array('cost' => 12)),
            'permissions' => 3,
            'account_owner' => 1,
            "email_verified" => 1,
            'language' => "de-DE",
            'join_date' => date('Y-m-d H:i:s'),
            'vericode' => randomstring(15),
            'vericode_expiry' => date('Y-m-d H:i:s'),
            'oauth_tos_accepted' => true
        ));

        // Verknüpfung Elternteil zu Kindkonto
        $db->insert("le_eltern_kind_matches", ["kind_id" => "$theNewId", "eltern_id" => "$eltern_id"]);

        // Erstellung Profil
        $db->insert("profiles", ["user_id" => "$theNewId", "bio" => "Kind", "kind" => "1", "geschlecht" => "m", "le_englisch" => "X", "le_deutsch" => "X", "le_mathematik" => "X", "le_realien" => "X", "le_bld_profil" => "profil", "le_bld_avatar" => "avatar", "punkte" => 0, "guthaben" => 0]);
    }
}
