
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CREATION DES MENUS</title>
    <link rel="stylesheet" href="traitementMenu.css" />
  </head>
  <body>
    <div class="container">
      <div class="categorieMenu">


        <?php
             if(!empty($_POST['id_plat'])){
             echo $_POST['id_plat'];
             } else {
             echo 'Remplir ce champ';
             }
         ?>


</br>

<input type="text" name="nom" value="">
      <?php
          if(!empty($_POST['nom'])){
          echo $_POST['nom'];
          } else {
          echo 'Remplir ce champ';
          }
        ?>
</input>

</br>

<input type="text" name="prix" value="">
        <?php
            if(!empty($_POST['prix'])){
            echo $_POST['prix'];
            } else {
            echo 'Remplir ce champ';
            }
          ?>
</input>

  <input type="submit" name="button" value="submit">

        </div>
      </div>
 </body>
</html>
