<?php
session_start();

$id_menu = $_POST['id_menu'];
$tableauId_plat = $_POST['id_plat'];

$_SESSION['admin'] = true;

include("./config/connections.php");

foreach ($tableauId_plat as $id_plat) {
  # code...


      $req = $bdd->prepare('INSERT INTO relation_menu_plat(id_menu,id_plat) VALUES(:id_menu,:id_plat)');

      $req->execute(array(
          'id_menu' => $id_menu,
          'id_plat' => $id_plat,
          ));

}
header("location: affichageMenu.php");

?>
