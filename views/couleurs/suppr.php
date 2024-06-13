<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'une couleur</h1>
<form action="<?= PATH ?>/couleurs/suppr_sauve/<?= $couleur['ID_COULEUR'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Couleur :</label>
          <input type="text" class="form-control mb-3" name="Id" id="Id"
          value=<?= $couleur['ID_COULEUR'] ?> readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Couleur :</label>
          <input type="text" class="form-control mb-3" name="Nom" id="Nom"
          value=<?= $couleur['NOM_COULEUR'] ?> readonly> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/couleurs"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>