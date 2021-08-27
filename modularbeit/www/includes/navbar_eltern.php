<?php

if (file_exists('../users/init.php')) {
  require_once '../users/init.php';
} elseif (file_exists('../../../users/init.php')) {

  require_once '../../../users/init.php';
} elseif (file_exists('./users/init.php')) {
  require_once './users/init.php';
}

$user = new User();

?>
<!-- Navbar für die Eltern -->

<nav class="navbar sticky-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/includes/images/alarm.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Mediengutschein
    </a>
<!-- Useranzeige -->
    <div class="dropdown">
      <button class="btn btn-outline-secondary d-flex justify-content-center d-md-table mx-auto dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="images/avatars/Placeholder.png" alt="" class="rounded-circle me-2" width="40" height="40">
        <?php echo $user->data()->username; ?>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/users/user_settings.php">Einstellungen</a></li>
        <li><a class="dropdown-item" href="/users/logout.php">Abmelden</a></li>
      </ul>
    </div>


  </div>
</nav>