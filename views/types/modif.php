<h1>Modification d'un Type</h1>
<form action="<?= PATH ?>/types/modif_sauve/<?php echo $type["ID_TYPE"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Type</label>
    <input type="number" class="form-control" id="Id" name="Id" value="<?php echo $type['ID_TYPE']; ?>">
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Type</label>
    <input type="text" class="form-control" id="Nom" name="Nom" value="<?php echo $type['NOM_TYPE']; ?>">
  </div>
  <input type="submit" class="btn btn-primary">
</form>
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Retour à la liste</button></a>