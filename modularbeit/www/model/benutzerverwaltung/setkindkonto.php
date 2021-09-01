<?php

require_once('../../../users/classes/User.php');
require_once('../../../users/classes/DB.php');
require_once('../../../model/lerneinheiten/DbConnection.php');

use Model\Lerneinheit\DbConnection;


// Klasse zum Erstellen des Kind Kontos

class CreateKindKonto
{

    private $user;
    private $eltern_id;
    private $db;
    private $status;


    public function __construct($username, $fname, $lname, $email, $password, $eltern_id, $gender)
    {
        $this->username = $username;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
        $this->user = new User();
        $this->eltern_id = $eltern_id;
        $this->gender = $gender;
        $this->db = DB::getInstance();


    }

// Nachfolgend Funktionen zum Anlegen eines Kind Kontos inklusive Befüllung Zusatztabellen

    public function setkontokind($username, $fname, $lname, $email, $password, $gender)
    {
        $theNewId = $this->user->create(array(
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
            'oauth_tos_accepted' => true,
            'gender' => Input::get('gender')
        ));


        // Verknüpfung Elternteil zu Kindkonto
        $this->db->insert("le_eltern_kind_matches", ["kind_id" => "$theNewId", "eltern_id" => "$this->eltern_id"]);

        // Erstellung Profil
        $this->db->insert("profiles", ["user_id" => "$theNewId", "bio" => "Kind", "kind" => "1", "geschlecht" => "$gender", "le_englisch" => "X", "le_deutsch" => "X", "le_mathematik" => "X", "le_realien" => "X", "le_bld_profil" => "profil", "le_bld_avatar" => "avatar", "punkte" => 0, "guthaben" => 0]);

        // Anpassung Permission ID
        $connection = new DbConnection();
        $conn = $connection->buildConnection();

        $sql = "UPDATE user_permission_matches SET permission_id= '3' WHERE user_id=$theNewId";

        if (mysqli_query($conn, $sql)) {
        $this->status = true;

        } else {
            $this->status = false;
        }

        mysqli_close($conn);

    }

    /**
     * Rückgabe des Status für die Verbuchung (Kind anlegen)
     */
    public function getStatus()
    {
        return $this->status;
    }

}
