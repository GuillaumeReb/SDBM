<h1>Ajout d'un type de bière</h1>
<form action="<?= PATH ?>/types/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Nom Type:</label>
          <input type="text" class="form-control" placeholder="Saisir un type" name="Nom" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Retour à la liste</button></a>