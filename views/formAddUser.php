<?php
    require_once "header.php";
?>
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
        <div class="form-group">
            <label for="pwdInput">Mot de passe</label>
            <select class="form-select" class="form-control" id="typeUser">
                <option disabled selected>Type de client</option>
                <option value="1">Admin</option>
                <option value="2">Client</option>
                <option value="3">Invité</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</body>