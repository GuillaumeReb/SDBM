<?php
class Couleur extends Model {
    public function __construct(){
        $this->table = "couleur";
        $this->getConnection();
    }
    public function update(int $id, string $nom){
        $nom = $nom;
        $sql = "UPDATE ".$this->table." set NOM_COULEUR=:p_nom WHERE ID_COULEUR=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(":p_id", $id, PDO::PARAM_INT);
        $query->bindParam(":p_nom", $nom, PDO::PARAM_STR);
        $query->execute();
    }
}
?>