<main class="container vh-100">
<h1 class="mb-5 mt-5">Modification d'une couleur</h1>
<form action="<?= PATH ?>/couleurs/modif_sauve/<?php echo $couleur["ID_COULEUR"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Couleur :</label>
    <input type="number" class="form-control mb-3" id="Id" name="Id" value="<?php echo $couleur['ID_COULEUR']; ?>">
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Couleur :</label>
    <input type="text" class="form-control mb-3" id="Nom" name="Nom" value="<?php echo $couleur['NOM_COULEUR']; ?>">
  </div>
  <input type="submit" class="btn btn-primary mb-2 mt-3">
</form>
<a href="<?= PATH ?>/couleurs"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>