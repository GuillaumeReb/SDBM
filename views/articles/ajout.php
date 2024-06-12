<h1>Ajout d'un article</h1>
<form action="<?= PATH ?>/articles/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Nom Article :</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom">

          
          <label for="Id_marque">Marque :</label>
          <select name="Id_marque" id="Id_marque" class="form-control">
            <?php     
              $marquecombo = "";
              foreach ($marque as $key) {
              $marquecombo .= "<option value=\"" . htmlspecialchars($key['ID_MARQUE']) . "\">" . htmlspecialchars($key['NOM_MARQUE']) . "</option>";    
              } 
              echo $marquecombo;?>
          </select>


          <label for="Id_type">Type :</label>
          <select name="Id_type" id="Id_type" class="form-control">
            <?php     
              $typecombo = "<option value=\"" . "NULL" . "\">" . "Pas de type" . "</option>";
              foreach ($type as $key) {
              $typecombo .= "<option value=\"" . htmlspecialchars($key['ID_TYPE']) . "\">" . htmlspecialchars($key['NOM_TYPE']) . "</option>";    
              } 
              echo $typecombo;?>
          </select>

          <label for="Id_couleur">Couleur :</label>
          <select name="Id_couleur" id="Id_couleur" class="form-control">
            <?php     
              $couleurcombo = "<option value=\"" . "NULL" . "\">" . "Pas de couleur" . "</option>";
              foreach ($couleur as $key) {
              $couleurcombo .= "<option value=\"" . htmlspecialchars($key['ID_COULEUR']) . "\">" . htmlspecialchars($key['NOM_COULEUR']) . "</option>";    
              } 
              echo $couleurcombo;?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/types"><button  class="btn btn-warning">Retour à la liste</button></a>