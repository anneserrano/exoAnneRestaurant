<?php
include("./includes/header.php")
?>

  <body>

<h1>CRÉEZ VOS MENUS</h1>

  <form action="traitementMenu.php" method="post" >

<br />

    <?php
    include("./config/connections.php");
    $reponse = $bdd->query('SELECT id, nom FROM plat');
    $donnees = $reponse->fetchAll();
     ?>

    <br />

    <p>
        <label for='nom'>NOM :</label>
        <input type="text" name="nom" id="nom" />
    </p>
      <br />
  <br />
      <p>
          <label for='prix'>PRIX :</label>
          <input type="text" name="prix" id="prix" />
      </p>
        <br />

      <input type="submit" name="button" value="submit">

</form>

<?php
include("./includes/footer.php")
?>
</body>
</html>
