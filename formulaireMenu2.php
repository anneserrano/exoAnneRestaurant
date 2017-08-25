<?php
include("./includes/header.php")
?>

  <body>

<h1>CHOISISSEZ VOS PLATS</h1>

  <form action="traitementMenu2.php" method="post" >

<br />

    <?php
    $id = $_GET["id"];
    echo '<input type="hidden" name="id_menu" value="'.$id.'"/>';

    include("./config/connections.php");
    $reponse = $bdd->query('SELECT id, nom FROM plat');
    $donnees = $reponse->fetchAll();
         ?>

        <?php
        foreach ($donnees as $value){
        echo '<input type="checkbox" name="id_plat[]" value='.$value['id'].'/>'.$value['nom'];
        }
        ?>


       <input type="submit" name="button" value="submit">


</form>

<?php
include("./includes/footer.php")
?>
</body>
</html>
