<main class="container vh-100">
<h1 class="mb-5 mt-5">Modification d'un Type</h1>
<form action="<?= PATH ?>/types/modif_sauve/<?php echo $type["ID_TYPE"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Type :</label>
    <input type="number" class="form-control mb-3" id="Id" name="Id" value="<?php echo $type['ID_TYPE']; ?>">
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Type :</label>
    <input type="text" class="form-control mb-3" id="Nom" name="Nom" value="<?php echo $type['NOM_TYPE']; ?>">
  </div>
  <input type="submit" class="btn btn-primary mb-2 mt-3">
</form>
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>