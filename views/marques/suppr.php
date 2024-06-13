<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'une Marque</h1>
<form action="<?= PATH ?>/marques/suppr_sauve/<?= $marque['ID_MARQUE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Marque :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $marque['ID_MARQUE'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Marque :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $marque['NOM_MARQUE'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-danger mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/marques"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>