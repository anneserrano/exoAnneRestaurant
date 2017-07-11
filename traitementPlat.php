<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);

$nom = $_POST['nom'];
$prix = $_POST['prix'];
$image = $_POST['image'];


$_SESSION['admin'] = true;

include("./config/connections.php");

$req = $bdd->prepare('INSERT INTO plat(nom, prix, image) VALUES(:nom, :prix, :image)');
$req->execute(array(

    'nom' => $nom,

    'prix' => $prix,

    'image' => $image,

    ));
header("location: creationPlat.php");

?>
