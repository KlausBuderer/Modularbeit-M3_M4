
<?php

require_once 'users/init.php';
//require_once 'includes/activeuser.php';
require_once 'includes/config.php';

require_once './features/kind/kinder_uebersicht/kinder_uebersicht_controller.php';
require_once './features/eltern/eltern_uebersicht/eltern_uebersicht_controller.php';

//$_SESSION['username'] = $user->data()->username;
$userId = $user->data()->id;

//ActiveUser::setName($username);
 


if(hasPerm([2],$user->data()->id)){
    Redirect::to($us_url_root.'users/admin.php');
  }elseif (hasPerm([3],$user->data()->id)) {
    Redirect::to('includes/kinder_uebersicht_template.php');
    //$kind = new Kinder_Uebesicht_Controller($userId);
  }elseif (hasPerm([1],$user->data()->id)){

    //Redirect::to('includes/eltern_uebersicht_template.php');

    new ElternuebersichtController($userId);
  }else{
    Redirect::to('users/login.php');  

    }
?>






