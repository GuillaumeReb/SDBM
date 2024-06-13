<main class="container vh-100">
<h1 class="mb-5 mt-5">Modification d'un Fabricant</h1>

<form action="<?= PATH ?>/fabricants/modif_sauve/<?php echo $fabricant['ID_FABRICANT']; ?>" method="POST">
        <div class="form-group mb-4">
          <label for="Id" class="form-label">Code Fabricant :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?php echo htmlspecialchars($fabricant['ID_FABRICANT'], ENT_QUOTES, 'UTF-8'); ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Fabricant :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= htmlspecialchars($fabricant['NOM_FABRICANT'], ENT_QUOTES, 'UTF-8'); ?>">
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Enregistrer</button>
</form>  
<a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>