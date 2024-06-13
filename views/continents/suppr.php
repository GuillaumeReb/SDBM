<main class="container vh-100">
<h1 class="mb-5 mt-5">Suppression d'un Continent</h1>
<form action="<?= PATH ?>/continents/suppr_sauve/<?= $continent['ID_CONTINENT'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Continent :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $continent['ID_CONTINENT'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Continent :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $continent['NOM_CONTINENT'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>