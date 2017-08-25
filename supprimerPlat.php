<?php
include("./config/connections.php");
$tab_id_plat = $_POST["id_plat"];

foreach ($tab_id_plat as $id_plat) {
  $reponse = $bdd->query("DELETE FROM plat WHERE id = '".$id_plat."'");
}
// header("location: affichagePlats.php");
header('location: affichagePlats.php')
?>
