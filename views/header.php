<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css\style.css">
    <title>TP Gestock</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="extensions/filter-control/bootstrap-table-filter-control.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="extensions/filter-control/bootstrap-table-filter-control.js"></script>

    
  </head>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="pouet">
    <a class="navbar-brand" href="../index.php">ACCUEIL</a>
    <div class="connexion">
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

</html>