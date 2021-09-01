<?php
require_once('../../../public/header.php');
require_once('../../../public/navbar_eltern.php');
require_once('../../../public/sidebar_eltern.php');
require_once('../../../public/header.php');

$status = $_POST['status'];
$fname = $_POST['fname'];

?>

<br>
<br>
<?php
if ($status == true) {
    echo '<div class="container">';


    echo '<div id="start_screen" class="container-fluid bg-light text-dark p-5">';
    echo '<h1>Kindkonto wurde erfolgreich angelegt.</h1>';
} else {
    echo '<div class="container">';


    echo '<div id="start_screen" class="container-fluid bg-light text-dark p-5">';
    echo '<h1>Kindkonto für konnte nicht angelegt werden.</h1>';

}
?>

<a type="button" href="/index.php" class="btn btn-outline-secondary">Zurück</a>
</div>


<?php
require_once('../../../public/footer.php');
?>
