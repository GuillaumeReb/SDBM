<h1>Suppression d'une couleur</h1>
<form action="<?= PATH ?>/couleurs/suppr_sauve/<?= $couleur['ID_COULEUR'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code Couleur :</label>
          <input type="text" class="form-control" name="Id" id="Id"
          value=<?= $couleur['ID_COULEUR'] ?> readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Couleur:</label>
          <input type="text" class="form-control" name="Nom" id="Nom"
          value=<?= $couleur['NOM_COULEUR'] ?> readonly> 
        </div>
        <button type="submit" class="btn btn-primary">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>