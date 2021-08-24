<?php

      if (file_exists('../users/init.php')) {
  require_once '../users/init.php';
} elseif (file_exists('../../../users/init.php')){
 
  require_once '../../../users/init.php';
}   elseif(file_exists('./users/init.php')){
   require_once './users/init.php';
} 


$user = new User();
 
?>

<!-- Navbar für die Kinder -->
<nav class="navbar sticky-top nbar" id="nav">
  <div class="container-fluid">
    <div class="col-xs-3 col-sm-5 col-md-3"> 
       <a class="navbar-brand logo" href="#">
      <img src="/includes/images/logo.png" alt="" class="img-fluid">
    </a>
  </div>
  <!-- Useranzeige -->
      <div class="col-sm-1 col-md-2">
          <div class="dropdown">
              <button class="btn btn-primary d-flex justify-content-center d-md-table mx-auto dropdown-toggle userField" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <img id="avatar" src="./images/avatars/Placeholder.png" alt="" class="img-fluid rounded-circle me-2" width="40" height="40">
              <?php  echo $user->data()->username; ?>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/users/user_settings.php">Einstellungen</a></li>
                <li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Avatar</button></li>
                <li><a class="dropdown-item" href="/users/logout.php">Abmelden</a></li>
              </ul>
          </div>
        </div>

  </div>
</nav>


 <!--Avatar Modal -->
 <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Avatar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">

                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="blue" onclick="setAvatar('Carla');">
                    <img class="img-fluid" src="./images/avatars/Carla.svg" alt="Blau">
                  </button>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="rosa" onclick="setAvatar('Andrea');">
                    <img class="img-fluid" src="./images/avatars/Andrea.svg" alt="Rosa">
                  </button>
                </div>


                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="orange" onclick="setAvatar('Carlo');">
                    <img class="img-fluid" src="./images/avatars/Carlo.svg" alt="Orange">
                  </button>
                </div>

              </div>
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="blue" onclick="setAvatar('Jonny');">
                    <img class="img-fluid" src="./images/avatars/Jonny.svg" alt="Grün">
                  </button>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="rosa" onclick="setAvatar('Sara');">
                    <img class="img-fluid" src="./images/avatars/Sara.svg" alt="vampir">
                  </button>
                </div>


                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="orange" onclick="setAvatar('Jorge');">
                    <img class="img-fluid" src="./images/avatars/Jorge.svg" alt="Pink">
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="blue" onclick="setAvatar('Kevin');">
                    <img class="img-fluid" src="./images/avatars/Kevin.svg" alt="Grün">
                  </button>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="rosa" onclick="setAvatar('Raul');">
                    <img class="img-fluid" src="./images/avatars/Raul.svg" alt="vampir">
                  </button>
                </div>


                <div class="col-md-4">
                  <button class="btn btn-outline-light" id="orange" onclick="setAvatar('Fiona');">
                    <img class="img-fluid" src="./images/avatars/Fiona.svg" alt="Pink">
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schliessen</button>
          </div>
        </div>
      </div>
    </div>

    <script src="/includes/js/avatar.js"></script>
