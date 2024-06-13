<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'un Article</h1>
<form action="<?= PATH ?>/articles/suppr_sauve/<?= $article['ID_ARTICLE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code Article :</label>
          <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $article['ID_ARTICLE'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Article :</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $article['NOM_ARTICLE'] ?>" readonly> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-4">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/articles"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>