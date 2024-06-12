<h1>Suppression d'une Marque</h1>
<form action="<?= PATH ?>/marques/suppr_sauve/<?= $marque['ID_MARQUE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code Marque :</label>
          <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $marque['ID_MARQUE'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Marque :</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $marque['NOM_MARQUE'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-primary">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/marques"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>