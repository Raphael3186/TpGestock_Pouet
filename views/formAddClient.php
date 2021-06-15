<?php
    require_once "header.php";
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
            <?php
                require_once "sideMenu.php"
            ?>
            </div>
            <div class="col-8">
                <h1>AJOUTER UN CLIENT</h1>
                <form action="../controller/clientRegistration.php" method="post">   
                    <div class="form-group">
                        <label for="nomInput">Nom</label>
                        <input type="text" class="form-control" id="nomInput" name="nomInput" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prenomInput">Prénom</label>
                        <input type="text" class="form-control" id="prenomInput" name="prenomInput" required>
                    </div>
                    <div class="form-group">
                        <label for="mailInput">Adresse mail</label>
                        <input type="mail" class="form-control" id="mailInput" placeholder="exemple@exemple.com" name="mailInput" required>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</body>