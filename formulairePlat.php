<?php
include("./includes/header.php")
?>


<h1>CRÉEZ VOS PLATS</h1>

<h3>Compléter toutes les rubriques et valider</h3>

  <form action="traitementPlat.php" method="post" >

    <p>
        <label for='nom'>Nom du plat :</label>
        <input type="text" name="nom" id="nom" />
    </p>
      <br />
  <br />
      <p>
          <label for='prix'>Son prix :</label>
          <input type="text" name="prix" id="prix" />
      </p>
        <br />

      <br />
    <p>
        <label for="image">L'image correspondante :</label>
        <input type="file" name="image" id="image" />
    </p>
      <br />

      <input type="submit" name="button" value="submit">

</form>
<?php
include("./includes/footer.php")
?>
