<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);


$nom = $_POST['nom'];
$prix = $_POST['prix'];
$image = $_POST['image'];


$_SESSION['admin'] = true;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CREATION DES PLATS</title>
    <link rel="stylesheet" href="traitementMenu.css" />
  </head>
  <body>
    <div class="container">
      <div class="categorieDeMenu">

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
</br>
        <?php
             if(!empty($_POST['image'])){
             echo $_POST['image'];
             } else {
             echo 'Remplir ce champ';
             }
         ?>

        </div>
      </div>
 </body>
</html>
