<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ACCUEIL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
  require_once "default.php";

  if(isset($_SESSION["user"]))
  {
    echo "Bonjour ".$_SESSION["user"];
    ?>
    <a href="controller/deconnexion.php">Se déconnecter</a>
  <?php
  }
  ?>
</nav>