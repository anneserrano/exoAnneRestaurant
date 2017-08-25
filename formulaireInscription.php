<?php
include("./includes/header.php")
?>

<h3>Inscription</h3>

  <form action="traitementInscription.php" method="post" >

      <p>
          <label for='email'>Adresse mail :</label>
          <input type="email" name="email" id="email" required="required"/>
      </p>

      <p>
          <label for='pass'>Mot de passe :</label>
          <input type="password" name="pass" id="pass" required="required"/>
      </p>



      <input type="submit" name="button" value="submit">

  </form>

<?php
include("./includes/footer.php")
?>
