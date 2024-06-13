<main class="container vh-100">
<h1 class="mt-5 mb-5">Modification d'un Article</h1>

<form action="<?= PATH ?>/articles/modif_sauve/<?= $article['ID_ARTICLE'] ?>" method="POST">
        <div class="form-group">
          <label for="Id">Code Article :</label>
          <input type="text" class="form-control" placeholder="Saisir un Code" name="Id" id="Id"
          value="<?= $article['ID_ARTICLE'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Article :</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom"
          value="<?= $article['NOM_ARTICLE'] ?>">
        </div>
        <div class="form-group">
          <label for="Nom">Nom Type :</label>
          <select name="Id_type" id="Id_type" class="form-control">
            <?php $typecombo = "";    
              foreach ($type as $key) {
                
                $selected = "";
                
                if ($key["ID_TYPE"] == $article["ID_TYPE"]) {
                      $selected = " selected";
                } else {
                      $selected = "";
                }
                      $typecombo .= "<option value=\"" . htmlspecialchars($key['ID_TYPE']) . "\"" . $selected .">" . htmlspecialchars($key['NOM_TYPE']) . "</option>"; 
        
                }
    
                echo $typecombo;
              ?>
              
          </select>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Marque :</label>
          <select name="Id_marque" id="Id_marque" class="form-control">
          <?php $marquecombo = "";    
              foreach ($marque as $key) {
                
                $selected = "";
                
                if ($key["ID_MARQUE"] == $article["ID_MARQUE"]) {
                      $selected = " selected";
                } else {
                      $selected = "";
                }
                      $marquecombo .= "<option value=\"" . htmlspecialchars($key['ID_MARQUE']) . "\"" . $selected .">" . htmlspecialchars($key['NOM_MARQUE']) . "</option>"; 
        
                }
    
                echo $marquecombo;
              ?>
          </select>
        </div>
        <div class="form-group">
          <label for="Nom">Nom Couleur :</label>
          <select name="Id_couleur" id="Id_couleur" class="form-control">
          <?php $couleurcombo = "";    
              foreach ($couleur as $key) {
                
                $selected = "";
                
                if ($key["ID_COULEUR"] == $article["ID_COULEUR"]) {
                      $selected = " selected";
                } else {
                      $selected = "";
                }
                      $couleurcombo .= "<option value=\"" . htmlspecialchars($key['ID_COULEUR']) . "\"" . $selected .">" . htmlspecialchars($key['NOM_COULEUR']) . "</option>"; 
        
                }
    
                echo $couleurcombo;
              ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-4">Enregistrer</button>
</form>  
<a href="<?= PATH ?>/articles"><button  class="btn btn-warning">Retour à la liste</button></a>
</main>