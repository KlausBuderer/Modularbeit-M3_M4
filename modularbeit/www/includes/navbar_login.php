<?php

      if (file_exists('../users/init.php')) {
  require_once '../users/init.php';
} elseif (file_exists('../../../users/init.php')){
 
  require_once '../../../users/init.php';
}   elseif(file_exists('./users/init.php')){
   require_once './users/init.php';
} 

/* if(file_exists('users/classes/User.php')){
require_once 'users/classes/User.php';
}elseif(file_exists('../users/classes/User.php')){
  require_once '../users/classes/class.autoloader.php';
}  */



$user = new User();
 
?>


<nav class="navbar sticky-top nbar">
  <div class="container-fluid">
    <a class="navbar-brand logo" href="#">
      <img src="/includes/images/alarm.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
     <span style="color: white;">Mediengutschein</span> 
    </a>

      <div class="dropdown">
          <button class="btn btn-primary d-flex justify-content-center d-md-table mx-auto dropdown-toggle userField" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" class="img-fluid rounded-circle me-2" width="40" height="40">
          <?php  echo $user->data()->username; ?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/users/user_settings.php">Einstellungen</a></li>
            <li><a class="dropdown-item" href="/users/logout.php">Abmelden</a></li>
          </ul>
      </div>
        

  </div>
</nav>


