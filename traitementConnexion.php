<?php

include("./config/connections.php");
// Hachage du mot de passe

$pass_hache = sha1($_POST['pass']);
$email = $_POST['email'];

$req = $bdd->prepare('SELECT id FROM membres WHERE email = :email AND pass = :pass');
$req->execute(array(

    'email' => $email,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}

else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
    header("location: accueil2.php");
    
}
