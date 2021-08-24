
<?php
require_once('../../../includes/navbar_eltern.php');
require_once('../../../includes/sidebar_eltern.php');
require_once('../../../includes/header.php');

$status = $_POST['status'];
$fname = $_POST['fname'];

?>


<br>
<br>
<?php
if ($status == true) {
    echo '<div class="container">';


    echo '<div id="start_screen" class="container-fluid bg-light text-dark p-5">';
    echo '<h1>Kindkonto für <?= $fname; ?> wurde erfolgreich angelegt.</h1>';
} else {
    echo '<div class="container">';


    echo '<div id="start_screen" class="container-fluid bg-light text-dark p-5">';
    echo '<h1>Kindkonto für <?= $fname; ?> konnte nicht angelegt werden.</h1>';

}
?>

<a type="button" href="/includes/eltern_uebersicht_template.php" class="btn btn-outline-secondary">Zurück</a>
</div>


<?php
require_once('../../../includes/footer.php');
?>
