<?php
include("./config/connections.php");
$id = $_GET["id"];
$reponse = $bdd->query("DELETE FROM menu WHERE id = '".$id."'");
// header("location: creationMenu.php");
?>

<!-- <?php.
// include("./config/connections.php");
// $id = $_GET["id"];
// $reponse = $bdd->query("DELETE FROM menu WHERE id = '".$id."'");
// header("location: creationMenu.php");
?> -->
