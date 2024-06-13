<main class="container vh-100">
<h1 class="mb-5 mt-5">Modification d'une marque</h1>

<form action="<?= PATH ?>/marques/modif_sauve/<?= $marque['ID_MARQUE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id" class="form-label">Code Marque :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $marque['ID_MARQUE'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Marque :</label>
          <input type="text" class="form-control mb-3" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $marque['NOM_MARQUE'] ?>">
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Pays :</label>
          <select name="Id_pays" id="Id_pays" class="form-control mb-3">
            <?php $payscombo = "";    
              foreach ($Pays as $key) {
                
                $selected = "";
                
                if ($key["ID_PAYS"] == $marque["ID_PAYS"]) {
                      $selected = " selected";
                } else {
                      $selected = "";
                }
                      $payscombo .= "<option value=\"" . htmlspecialchars($key['ID_PAYS']) . "\"" . $selected .">" . htmlspecialchars($key['NOM_PAYS']) . "</option>"; 
        
                }
    
                echo $payscombo;
              ?>
              
          </select>
        </div>
        <div class="form-group">
          <label for="Nom" class="form-label">Nom Fabricant :</label>
          <select name="Id_fabricant" id="Id_fabricant" class="form-control mb-3">
          <?php $fabcombo = "";    
              foreach ($fabricants as $key) {
                
                $selected = "";
                
                if ($key["ID_FABRICANT"] == $marque["ID_FABRICANT"]) {
                      $selected = " selected";
                } else {
                      $selected = "";
                }
                      $fabcombo .= "<option value=\"" . htmlspecialchars($key['ID_FABRICANT']) . "\"" . $selected .">" . htmlspecialchars($key['NOM_FABRICANT']) . "</option>"; 
        
                }
    
                echo $fabcombo;
              ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-3">Enregistrer</button>
</form>  
<a href="<?= PATH ?>/marques"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>