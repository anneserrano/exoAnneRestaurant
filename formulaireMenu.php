<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORMULAIRE MENU</title>
    <link rel="stylesheet" href="menu.css" />
  </head>
  <body>

<h2>MENUS</h2>

  <form action="traitementMenu.php" method="post" >

<br />

    <?php
    include("./config/connections.php");
    $reponse = $bdd->query('SELECT id, nom FROM plat');
    $donnees = $reponse->fetchAll();
     ?>

        <select name="plat" size="1" id="id_plat">
        <option value="">SELECTION PLAT</option>
        <?php
        foreach ($donnees as $value){
            echo "<option value='".$value['id']."'>".$value['nom']."</option>" ;
        }
        ?>
        </select>

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

</body>
</html>
