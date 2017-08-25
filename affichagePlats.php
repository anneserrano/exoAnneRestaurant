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

    <form method="post" action="supprimerPlat.php">

<?php
foreach ($plats as $plat) {
echo '<input type="checkbox" name="id_plat[]" value="'.$plat['Id'].'" /><label for="nom">'.$plat['nom'].'</label>';
echo '<p>prix '.$plat['prix'].' €</p>';
echo '<img id="imagePlat" src="assets/img/'.$plat['image'].'" alt="plat" ></a></br>';
}
 ?>

           <p>Cochez le plat que vous souhaitez supprimer ou retournez au formulaire pour en créer un nouveau</p>

           <button href="supprimerPlat.php" type="submit">supprimer</button/>
           <input type="button" value="Accueilconnexion" onClick="location.href='accueil2.php'" />
           <input type="button" value="Retour au formulaire" onClick="location.href='formulairePlat.php'" />
    </form>

<?php
include("./includes/footer.php")
?>
