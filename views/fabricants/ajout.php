<h1>Ajout d'un fabricant</h1>
<form action="<?= PATH ?>/fabricants/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Nom Fabricant:</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"> 
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/fabricants"><button  class="btn btn-warning">Retour à la liste</button></a>