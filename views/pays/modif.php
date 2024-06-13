<main class="container vh-100">
<h1 class="mb-5 mt-5">Modification d'un pays</h1>
<form action="<?= PATH ?>/pays/modif_sauve/<?php echo $pays["ID_PAYS"]; ?>" method="POST">
<div class="mb-3">
    <label for="Id" class="form-label">Code Pays :</label>
    <input type="number" class="form-control mb-3" id="Id" name="Id" value="<?php echo $pays['ID_PAYS']; ?>">
  </div>
<div class="mb-3">
    <label for="Nom" class="form-label">Pays :</label>
    <input type="text" class="form-control mb-3" id="Nom" name="Nom" value="<?php echo $pays['NOM_PAYS']; ?>">
  </div>

  <div class="form-group">
          <label for="Nom">Continent:</label>
          <select name="Id_continent" id="Id_continent" class="form-control mb-3">
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


  <input type="submit" class="btn btn-primary mb-2 mt-3">
</form>
<a href="<?= PATH ?>/pays"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>