
<?php
    require_once('navbar_eltern.php');
    require_once('sidebar_eltern.php');
    require_once('header.php');
    require_once('../users/classes/User.php');
    $lname = $user->data()->lname;
    ?>

<head>
    <meta charset="UTF-8">
    <title>Kind erfassen</title>
</head>

<body>
    <div class='container'>
       <h1>Neues Kind erfassen</h1>
        <p>Hier haben Sie die Möglichkeit Ihr Kind zu erfassen.</p>
        <form action="../features/eltern/kind_hinzufuegen/kind_hinzufuegen_controller.php" method="post">
            <div>
                <input type="radio" name="gender" value="M" checked>Mädchen
                <input type="radio" name="gender" value="J" id="gender">Junge<br>
                <input type="hidden" name="aktion" value="speichern">
                <br>
            </div>
            <div class="form-group">
                <label for="username">Benutzername des Kindes</label>
                <input name="username" type="text" class="form-control" id="username" required
                data-toggle="tooltip" data-placement="top" title="Bitte geben Sie den gewünschten Benutzernamen ein">
  
            </div>
            <div class="form-group">
                <label for="fname">Vorname</label>
                <input name="fname" type="text" class="form-control" id="fname" required
                data-toggle="tooltip" data-placement="top" title="Bitte geben Sie den gewünschten Vornamen ein">
            </div>
            <div class="form-group">
                <label for="lname">Nachname</label><br>
                <input name="lname" type="text" value="<?php echo $lname; ?>" class="form-control" id="lname" readonly
                data-toggle="tooltip" data-placement="top" title="Sie können nur Kinder mit dem gleichen Nachnamen erfassen.Sollten Sie es anderes benötigen,
                 so können dies nachträglich im Benutzerprofil des Kindes ändern">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" required
                data-toggle="tooltip" data-placement="top" title="Bitte geben Sie eine E-Mail Adresse ein, im Falle wenn Sie das Passwort zurücksetzen möchten / müssen.">
            </div>
            <label>
                <div class="form-group">
                    <label for="fname">Passwort</label>
                    <input name="password" type="text" class="form-control" id="password" required
                    data-toggle="tooltip" data-placement="top" title="Bitte geben Sie ein für Ihr Kind gut merkbares Passwort ein">
            </label>
           </div>
           <label for="Lerneinheiten">Automatisch zugeordnete Lerneinheiten</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="X" id="cboxmathematik" disabled checked>
                <label class="form-check-label" for="cboxmathematik">
                    Mathematik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="X" id="cboxdeutsch" disabled checked>
                <label class="form-check-label" for="cboxdeutsch">
                    Deutsch
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="X" id="cboxenglisch" disabled checked>
                <label class="form-check-label" for="cboxenglisch">
                    Englisch
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="X" id="cboxrealien" disabled checked>
                <label class="form-check-label" for="cboxrealien">
                    Realien
                </label>
            </div>
        </div>

        <button type="submit" action="" class="form-control" value="speichern">Kind erstellen</button>


       </form>
    </div>

<?php
require_once('footer.php');
?>
