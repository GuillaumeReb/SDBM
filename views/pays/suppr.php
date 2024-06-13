<main class="container vh-100">
<h1 class="mt-5 mb-5">Suppression d'un pays</h1>
<form action="<?= PATH ?>/pays/suppr_sauve/<?= $pays['ID_PAYS'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Pays :</label>
          <input type="text" class="form-control mb-3" name="Id" id="Id"
          value=<?= $pays['ID_PAYS'] ?> readonly>
        </div>
        <div class="form-group">
          <label for="Nom"  class="form-label">Nom Pays :</label>
          <input type="text" class="form-control mb-3" name="Nom" id="Nom"
          value=<?= $pays['NOM_PAYS'] ?> readonly> 
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Continent:</label>
          <select name="Id_continent" id="Id_continent" class="form-control mb-3" readonly>
            <?php foreach($continents as $continent): ?>
                <option value=<?php
                      echo $continent['ID_CONTINENT'];
                      if ($continent['ID_CONTINENT'] == $pays['ID_CONTINENT']) {
                          echo " selected";
                      }
                     ?>>
                    <?= $continent['NOM_CONTINENT'] ?>
                </option>
            <?php endforeach ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Confirmer la suppression</button>
</form>  
<a href="<?= PATH ?>/pays"><button  class="btn btn-warning">Annuler et retourner à la liste</button></a>
</main>