<!DOCTYPE html>
<html>
<?php
    require_once('../../../includes/navbar_eltern.php');
    require_once('../../../includes/sidebar_eltern.php');
    require_once('../../../includes/header.php');
    $lname = $user->data()->lname;
    $email = $user->data()->email;
    $passwort = 'willkommen'
    ?>

<head>
    <meta charset="UTF-8">
    <title>Kind erfassen</title>
</head>

<body>
    <div class='container'>
        <h1>Neues Kind erfassen</h1>
        <p>Hier haben Sie die Möglichkeit Ihr Kind zu erfassen.</p>
        <form action="kind_hinzufuegen_controller.php" method="post">
            <div>
                <input type="radio" name="spam" value="1" checked>Mädchen
                <input type="radio" name="spam" value="2" id="geschlecht">Junge<br>
                <br>
            </div>
            <div class="form-group">
                <label for="username">Benutzername des Kindes</label>
                <input name="username" type="text" class="form-control" id="username" required>
            </div>
            <div class="form-group">
                <label for="fname">Vorname</label>
                <input name="fname" type="text" class="form-control" id="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Nachname</label><br>
                <input name="lname" type="text" value="<?php echo $lname; ?>" class="form-control" id="lname" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" value="<?php echo $email; ?>" class="form-control" id="email" disabled>
            </div>
            <br>
            <label>
                <p style="color:red;"><b>Achtung:</b>
            </label>
            <label>
                <p style="color:red;">Für das neu angelegte Kind, gilt das Standard Passwort willkommen und kann im
                    Profil vom Kind selbständig geändert werden.</p>
            </label>
            <div class="form-group">
                <label for="passwort">Passwort</label>
                <input name="passwort" type="passwort" value="<?php echo $passwort; ?>" class="form-control"
                    id="passwort" disabled>
            </div>
            <br>
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
            <button type="submit" class="form-control">Kind erstellen</button>
    </div>
    </form>
    </div>
</body>

</html>