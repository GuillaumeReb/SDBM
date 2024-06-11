<h1>Suppression d'un Fabricant</h1>
<form action="<?= PATH ?>/fabricants/suppr_sauve/<?= $fabricant['ID_FABRICANT'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code Fabricant :</label>
          <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $fabricant['ID_FABRICANT'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Fabricant :</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $fabricant['NOM_FABRICANT'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-primary">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>