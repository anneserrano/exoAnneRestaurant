<?php
include("./config/connections.php");

$req = $bdd->prepare('SELECT * from menu' );
$req->execute();
$plats=$req->fetchAll();
?>

<?php
include("./includes/header.php")
?>

<body>

<h1>Les Menus</h1>

  <form method="post" action="supprimerMenu.php">

<?php
foreach ($menus as $menu) {
echo '<input type="checkbox" name="id_menu[]" value="'.$Menu['Id'].'" /><label for="nom">'.$plat['nom'].'</label>';
echo '<p>prix '.$menu['prix'].' €</p>';
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
