<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kind erfassen</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class='container'>
            <h1>Neues Kind erfassen</h1>
            <p>Hier haben Sie die Möglichkeit Ihr Kind zu erfassen.</p>
            
            <form action="kind_hinzufuegen_controller.php" method="post">
                <div>
                    <div class="form-group">
                        <label for="bname_kind">Benutzername des Kindes</label>
                        <input name="bname_kind" type="text" class="form-control" id="bname_kind">
                    </div>
                    <div class="form-group">
                        <label for="vorname_kind">Nachname</label>
                        <input name="vorname_kind" type="text" class="form-control" id="vorname_kind">
                    </div>
					<div class="form-group">
                        <label for="nachname_kind">Nachname</label>
                        <input name="nachname_kind" type="text" class="form-control" id="nachname_kind">
                    </div>                  
                   <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="adresse@domain.com">
                    </div>
                    <label for="Lerneinheiten">Automatisch zugeordnete Lerneinheiten</label>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="chkbx_mathematik"  disabled checked >
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