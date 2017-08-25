<?php
include("./config/connections.php");
$tab_id_menu = $_POST["id_menu"];

foreach ($tab_id_menu as $id_menu) {
  $reponse = $bdd->query("DELETE FROM menu WHERE id = '".$id_menu."'");
}
// header("location: affichagePlats.php");
header('location: affichageMenu.php')
?>
