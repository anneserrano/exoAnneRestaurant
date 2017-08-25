<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);

$nom = $_POST['nom'];
$prix = $_POST['prix'];

$_SESSION['admin'] = true;

include("./config/connections.php");

$req = $bdd->prepare('INSERT INTO menu(nom,prix) VALUES(:nom,:prix)');

$req->execute(array(
    'nom' => $nom,
    'prix' => $prix,
  ));
//on recupère le dernier ID rentré en base
$id_menu=$bdd->lastInsertId();



header("location: formulaireMenu2.php?id=".$id_menu);
?>
