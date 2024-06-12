<h1>Ajout d'un continent</h1>
<form action="<?= PATH ?>/marques/ajout_sauve" method="POST">
        <div class="form-group">
          <label for="Nom">Nom Marque:</label>
          <input type="text" class="form-control" placeholder="Saisir un Nom" name="Nom" id="Nom">
          <label for="Id_fabricant">Fabricant</label>
          <select name="Id_fabricant" id="Id_fabricant">
            <?php     $option = "";
    foreach ($fabricant as $key) {
      $option .= "<option value=\"" . htmlspecialchars($key['ID_FABRICANT']) . "\">" . htmlspecialchars($key['NOM_FFABRICANT']) . "</option>";    
    } 
    echo $option;?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<a href="<?= PATH ?>/continents"><button  class="btn btn-warning">Retour à la liste</button></a>