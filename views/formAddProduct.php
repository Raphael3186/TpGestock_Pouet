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
                <h1>AJOUTER UN PRODUIT</h1>
                <form action="../controller/productRegistration.php" method="post" id="Ajout-Product">
                    <div class="form-group">
                        <label for="codeInput">Code Produit</label>
                        <input type="text" class="form-control" id="codeInput" name="codeInput" required>
                    </div>
                    <div class="form-group">
                        <label for="nomInput">Nom du produit</label>
                        <input type="text" class="form-control" id="nomInput" name="nomInput" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="detailInput">Détail du produit</label>
                        <input type="text" class="form-control" id="detailInput"  name="detailInput" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cateInput">Catégorie produit</label>
                        <input type="text" class="form-control" id="cateInput"  name="cateInput" required>
                    </div>
                    <div class="form-group">
                        <label for="qteInput">Quantité produit</label>
                        <input type="number" class="form-control" id="qteInput" name="qteInput" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="prixInput">Prix d'achat du produit</label>
                        <input type="number" class="form-control" id="prixInput" name="prixInput" min="0.01" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="dateProd">Date d'expiration du produit</label>
                        <input type="date" id="dateProd" name="dateProd" value="2010-01-01" min="2010-01-01" max="2025-12-31">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</body>