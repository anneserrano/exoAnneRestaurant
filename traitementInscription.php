<?php

include("./config/connections.php");

$email = $_POST['email'];
if (!empty($_POST['pass'])){
  $pass_hache = sha1($_POST['pass']);
}
else {
  header("location: formulaireInscription.php");
}


$req = $bdd->prepare('INSERT INTO membres(email,pass) VALUES(:email,:pass)');

$resultat = $req->execute(array(
  'email' => $email,
  'pass' => $pass_hache,

));

      session_start();
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['email'] = $email;
      header("location: accueil.php");





?>
