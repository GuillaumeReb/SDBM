<h1>Modification d'un continent</h1>
<form action="<?= PATH ?>/couleurs/modif/<?php echo $continent["ID_COULEUR"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Couleur</label>
    <input type="number" class="form-control" id="Id" name="Id" value="<?php echo $coleur['ID_COULEUR']; ?>" disabled>
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Couleur</label>
    <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo $couleur['NOM_COULEUR']; ?>">
  </div>
  <input type="submit" class="btn btn-primary">
</form>
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Retour à la liste</button></a>