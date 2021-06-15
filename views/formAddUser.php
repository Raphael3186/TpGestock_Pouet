<?php
    require_once "header.php";
?>
<body>
    <h1>AJOUTER UN UTILISATEUR</h1>
    <form action="../controller/userRegistration.php" method="post">
        <div class="form-group">
            <label for="prenomInput">Prénom</label>
            <input type="text" class="form-control" id="prenomInput" name="prenomInput" required>
        </div>
        <div class="form-group">
            <label for="nomInput">Nom</label>
            <input type="text" class="form-control" id="nomInput" name="nomInput" required>
            </select>
        </div>
        <div class="form-group">
            <label for="mailInput">Adresse mail</label>
            <input type="mail" class="form-control" id="mailInput" placeholder="exemple@exemple.com" name="mailInput" required>
            </select>
        </div>
        <div class="form-group">
            <label for="pwdInput">Mot de passe</label>
            <input type="password" class="form-control" id="pwdInput" placeholder="Mot de passe..." name="pwdInput" required>
        </div>
        <div class="form-group">
            <label for="typeUser">Type de client</label>
            <select class="form-select" class="form-control" id="typeUser" name="typeUser" required>
                <option disabled selected>Type de client</option>
                <option value="admin">Admin</option>
                <option value="client">Client</option>
                <option value="guest">Invité</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</body>