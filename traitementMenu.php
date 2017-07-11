<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);

$id_plat = $_POST['plat'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];


$_SESSION['admin'] = true;

include("./config/connections.php");

$req = $bdd->prepare('INSERT INTO menu(nom,prix,id_plat) VALUES(:nom,:prix,:id_plat)');

$req->execute(array(



    'id_plat' => $id_plat,

    'nom' => $nom,

    'prix' => $prix,

    ));

header("location: creationMenu.php");

?>
