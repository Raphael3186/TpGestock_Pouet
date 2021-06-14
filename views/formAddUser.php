<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <!-- TODO: Dire au formulaire d'envoyer les données vers une future fonction "enregistrer" de userRegistration.php -->
    <body>
      <form>
            <div class="form-group" action="../controller/userRegistration.php" method="">
                <label for="prenomInput">Prénom</label>
                <input type="text" class="form-control" id="prenomInput">
            </div>
            <div class="form-group">
                <label for="nomInput">Nom</label>
                <input type="text" class="form-control" id="nomInput">
                </select>
            </div>
            <div class="form-group">
                <label for="mailInput">Adresse mail</label>
                <input type="mail" class="form-control" id="mailInput" placeholder="exemple@exemple.com">
                </select>
            </div>
            <div class="form-group">
                <label for="pwdInput">Mot de passe</label>
                <input type="password" class="form-control" id="pwdInput" placeholder="Mot de passe...">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </body>
</html>

