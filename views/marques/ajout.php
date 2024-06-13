<main class="container vh-100">
<h1 class="mb-5 mt-5">Ajout d'une marque</h1>
<form action="<?= PATH ?>/marques/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Marque :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom">

          
          <label for="Id_pays" class="form-label">Pays :</label>
          <select name="Id_pays" id="Id_pays" class="form-control mb-3">
            <?php     
              $payscombo = "";
              foreach ($pays as $key) {
              $payscombo .= "<option value=\"" . htmlspecialchars($key['ID_PAYS']) . "\">" . htmlspecialchars($key['NOM_PAYS']) . "</option>";    
              } 
              echo $payscombo;?>
          </select>


          <label for="Id_fabricant" class="form-label ">Fabricant :</label>
          <select name="Id_fabricant" id="Id_fabricant" class="form-control mb-3">
            <?php     
              $fabricantcombo = "<option value=\"" . "NULL" . "\">" . "Pas de fabricant" . "</option>";
              foreach ($fabricants as $key) {
              $fabricantcombo .= "<option value=\"" . htmlspecialchars($key['ID_FABRICANT']) . "\">" . htmlspecialchars($key['NOM_FABRICANT']) . "</option>";    
              } 
              echo $fabricantcombo;?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3 mb-2">Ajouter</button>
</form>
<a href="<?= PATH ?>/marques"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>