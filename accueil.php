<?php
include("./includes/header.php")
?>


<div class="connexion">
  <input type="button" value="se connecter" onClick="location.href='formulaireConnexion.php'" />
</div>

<div class="inscription">
  <input type="button" value="s'inscrire" onClick="location.href='formulaireInscription.php'" />
</div>



    <h1>Nano</h1>

    <div class="creer">
      <input type="button" value="Nos plats" onClick="location.href='cartePlat.php'" />
    </div>

    <div class="creer">
      <input type="button" value="Nos menus" onClick="location.href='carteMenu.php'" />
    </div>

    <!-- <div class="monMenu">
     <ul id="menu-demo2">
    	    <li><a href="formulairePlat.php">Créer votre plat</a>
          </li>
        </ul>
        <ul id="menu-demo2">
           <li><a href="formulaireMenu.php">Créer votre menu</a>
         </ul> ->
         <!-- <ul id="menu-demo2">
      	    <li><a href="html/exercice">EXERCICES</a>
              <ul>
                <li><a href="#">lien sous menu 1</a></li>
                <li><a href="#">lien sous menu 1</a></li>
                <li><a href="#">lien sous menu 1</a></li> -->
              <!-- </ul> -->
            <!-- </li>
          </ul>
    </div> -->

  <?php
  include("./includes/footer.php")
  ?>
