<?php
include("./config/connections.php");

$req = $bdd->prepare('SELECT * from plat' );
$req->execute();
$plats=$req->fetchAll();
?>

<?php
include("./includes/header.php")
?>

  <body>

<h1>Les plats</h1>

    <form method="post">

<?php
foreach ($plats as $plat) {
echo '<label for="nom">'.$plat['nom'].'</label>';
echo '<p>prix '.$plat['prix'].' €</p>';
echo '<img id="imagePlat" src="assets/img/'.$plat['image'].'" alt="plat" ></a></br>';
}
?>

 <input type="button" value="Retour à l'accueil" onClick="location.href='accueil.php'" />

  </form>

<?php
include("./includes/footer.php")
?>
