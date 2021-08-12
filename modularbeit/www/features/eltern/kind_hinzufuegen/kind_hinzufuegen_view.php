<!DOCTYPE html>
<html>
    <?php
    require_once('../../../includes/navbar_eltern.php');
    require_once('../../../includes/sidebar_eltern.php');
    require_once('../../../includes/header.php');
    $nachname = $user->data()->lname;
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

                <label for="geschlecht">Geschlecht des Kindes</label>
                <div class="form-group">
                <select id="inputState" class="form-control" name="geschlecht"><br>
                <option>Bitte auswählen</option>
                <option>Mädchen</option>
                <option>Junge</option>
                </select>
                </div>
                    <div class="form-group">
                        <label for="bname_kind">Benutzername des Kindes</label>
                        <input name="bname_kind" type="text" class="form-control" id="bname_kind" required>
                    </div>
                    <div class="form-group">
                        <label for="vorname_kind">Vorname</label>
                        <input name="vorname_kind" type="text" class="form-control" id="vorname_kind" required>
                    </div>                 
					<div class="form-group">
                        <label for="nachname_kind">Nachname</label><br>
                        <input name="nachname_kind" type="text" value="<?php echo $nachname; ?>"class="form-control" id="nachname_kind" disabled> 
                    </div>                  
                   <div class="form-group">
                        <label for="email">Email</label>                   
                        <input name="email" type="email" value="<?php echo $email; ?>"class="form-control" id="email" disabled> 
                    </div>
                    <br>
                    <label><p style="color:red;"><b>Achtung:</b></label>
                    <label><p style="color:red;">Für das neu angelegte Kind, gilt das Standard Passwort willkommen und kann im Profil vom Kind selbständig geändert werden.</p></label>
                    <div class="form-group">
                        <label for="passwort">Passwort</label>                   
                        <input name="passwort" type="passwort" value="<?php echo $passwort; ?>"class="form-control" id="passwort" disabled> 
                    </div>
                    <br>
                    <label for="Lerneinheiten">Automatisch zugeordnete Lerneinheiten</label>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="chkbx_mathematik" disabled checked >
                <label class="form-check-label" for="chkbx_mathematik">
                    Mathematik
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="chkbx_le_deutsch" disabled checked >
                <label class="form-check-label" for="chkbx_le_deutsch">
                    Deutsch
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="chkbx_le_englisch" disabled checked >
                <label class="form-check-label" for="chkbx_le_englisch">
                  Englisch
                </label>
                </div>
                <div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="chkbx_le_realien" disabled checked >
                <label class="form-check-label" for="chkbx_le_realien">
                  Realien
                </label>
                </div>
  		   <button type="submit" class="form-control">Kind erstellen</button>
              </div>
          </form>
        </div>
    </body>
</html>