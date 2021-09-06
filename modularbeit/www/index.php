
<?php

require_once 'users/init.php';
require_once 'public/config.php';

require_once './features/kind/kinder_uebersicht/kinder_uebersicht_controller.php';
require_once './features/eltern/eltern_uebersicht/eltern_uebersicht_controller.php';

 
//Admin
if(hasPerm([2],$user->data()->id)){
    Redirect::to($us_url_root.'users/admin.php');
//Kind
  }elseif (hasPerm([3],$user->data()->id)) {
    Redirect::to('public/kinder_uebersicht_template.php');
//Eltern
  }elseif (hasPerm([1],$user->data()->id)){

    new ElternuebersichtController($user->data()->id);
  }else{
    Redirect::to('users/login.php');  

    }
?>






