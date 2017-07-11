<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORMULAIRE PLATS</title>
    <link rel="stylesheet" href="plat.css" />
  </head>
  <body>

<h2>PLATS</h2>

  <form action="traitementPlat.php" method="post" >

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

      <br />
    <p>
        <label for="image">IMAGE :</label>
        <input type="text" name="image" id="image" />
    </p>
      <br />

      <input type="submit" name="button" value="submit">

</form>

</body>
</html>
