<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'un Type</h1>
<form action="<?= PATH ?>/types/suppr_sauve/<?= $type['ID_TYPE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Type :</label>
          <input type="text" class="form-control mb-3" name="Id" id="Id"
          value=<?= $type['ID_TYPE'] ?> readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Type :</label>
          <input type="text" class="form-control mb-3" name="Nom" id="Nom"
          value=<?= $type['NOM_TYPE'] ?> readonly> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>