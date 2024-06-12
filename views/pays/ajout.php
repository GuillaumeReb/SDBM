<h1>Ajout d'un pays</h1>
<form action="<?= PATH ?>/pays/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Nom Pays:</label>
          <input type="text" class="form-control" placeholder="Saisir un Pays" name="Nom" id="Nom">                    
        </div>
<!-- combo boucle foreach -->
        <div class="form-group">
          <label for="Nom">Continent:</label>
          <select name="Id_continent" id="Id_continent" class="form-control">
            <?php foreach($continents as $continent): ?>
                <option value=<?= $continent['ID_CONTINENT'] ?>><?= $continent['NOM_CONTINENT'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/pays"><button  class="btn btn-warning">Retour à la liste</button></a>