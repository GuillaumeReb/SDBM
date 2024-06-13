<main class="container vh-100">
<h1 class="mb-5 mt-5">Ajout d'un continent</h1>
<form action="<?= PATH ?>/continents/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Continent :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Ajouter</button>
</form>
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>