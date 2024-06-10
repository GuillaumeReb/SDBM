<h1>Modification d'un continent</h1>
<form action="<?= PATH ?>/continents/modif_sauve/<?php echo $continent["ID_CONTINENT"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Continent</label>
    <input type="number" class="form-control" id="Id" name="Id" value="<?php echo $continent['ID_CONTINENT']; ?>" disabled>
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Continent</label>
    <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo $continent['NOM_CONTINENT']; ?>">
  </div>
  <input type="submit" class="btn btn-primary">
</form>
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Retour à la liste</button></a>