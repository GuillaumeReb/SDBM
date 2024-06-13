<main class="container vh-100">
<h1 class="mb-5 mt-5">Ajout d'un type de bière</h1>
<form action="<?= PATH ?>/types/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Type:</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un type" name="Nom" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary mb-3 mt-2">Ajouter</button>
</form>
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>