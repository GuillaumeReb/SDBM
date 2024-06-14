<main class="container vh-100"></main>
<h1 class="mb-5 mt-5">Ajout d'un ticket</h1>
<form action="<?= PATH ?>/tickets/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom" class="form-label">Année :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir une Année" name="Annee" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Ajouter</button>
</form>
<a href="<?= PATH ?>/tickets"><button  class="btn btn-warning">Retour à la liste</button></a>