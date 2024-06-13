<h1>Ajout d'un ticket</h1>
<form action="<?= PATH ?>/tickets/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Année :</label>
          <input type="text" class="form-control" placeholder="Saisir une Année" name="Annee" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/tickets"><button  class="btn btn-warning">Retour à la liste</button></a>