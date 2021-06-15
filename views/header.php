<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="pouet">
    <a class="navbar-brand" href="#">ACCUEIL</a>
    <div class="conexion">
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
    </div>
  </nav>
</header>