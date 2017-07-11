<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);


$id_plat = $_POST['plat'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];


$_SESSION['admin'] = true;
?>

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
      <?php
          if(!empty($_POST['nom'])){
          echo $_POST['nom'];
          } else {
          echo 'Remplir ce champ';
          }
        ?>
</br>
        <?php
            if(!empty($_POST['prix'])){
            echo $_POST['prix'];
            } else {
            echo 'Remplir ce champ';
            }
          ?>

        </div>
      </div>
 </body>
</html>
