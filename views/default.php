<?php
session_start();

if(!isset($_SESSION["user"]))
{
  ?>
  
    <form action=<?php echo PATH_HOST_ABS ?> "/controller/user.php" method="post">
      <div class="form-group">
        <label for="inputMail">Mail</label>
        <input type="email" class="form-control" id="inputMail" aria-describedby="emailHelp" placeholder="exemple@mail" name="inputMail" required>
      </div>
      <div class="form-group">
        <label for="inputPwd">Mot de passe</label>
        <input type="password" class="form-control" id="inputPwd" placeholder="Mot de passe..." name="inputPwd" required>
      </div>
      <button type="submit" class="btn btn-primary btn-sm" >Se connecter</button>
    </form>
<?php
}
?>