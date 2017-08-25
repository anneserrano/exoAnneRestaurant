<?php
include("./config/connections.php");

$req = $bdd->prepare('SELECT * from menu' );
$req->execute();
$menus=$req->fetchAll();
?>

<?php
include("./includes/header.php")
?>

<body>

<h1>Les Menus</h1>

  <form method="post">

<?php
foreach ($menus as $menu) {
echo '<label for="nom">'.$menu['nom'].'</label>';
echo '<p>prix '.$menu['prix'].' €</p>';
}
?>

<input type="button" value="Retour à l'accueil" onClick="location.href='accueil.php'" />

  </form>

<?php
include("./includes/footer.php")
?>
