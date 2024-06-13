<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'un Fabricant</h1>
<form action="<?= PATH ?>/fabricants/suppr_sauve/<?= $fabricant['ID_FABRICANT'] ?>" method="POST">
        <div class="form-group mb-4">
          <label for="Id" class="form-label">Code Fabricant :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $fabricant['ID_FABRICANT'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Fabricant :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $fabricant['NOM_FABRICANT'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>