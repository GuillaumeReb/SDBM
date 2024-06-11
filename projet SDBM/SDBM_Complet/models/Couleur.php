<?php
/**
 * Classe Model Couleur

 */
class Couleur extends Model {
    public function __construct(){
        $this->table = "couleur";
        $this->getConnection();
    }
    public function update(int $id, string $nom){
        $nom = htmlspecialchars($nom); // Faille XSS
        $sql = "UPDATE ".$this->table." set NOM_COULEUR=:p_nom WHERE ID_COULEUR=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(":p_id", $id, PDO::PARAM_INT);
        $query->bindParam(":p_nom", $nom, PDO::PARAM_STR);
        $query->execute();
    }


    /**
     * Supprime une Couleur à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM ".$this->table." WHERE ID_COULEUR=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->execute();    
    }

     /**
     * Ajoute une Couleur 
     *
     * @param string $nom
     * @return void
     */
    public function insert(string $nom) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        $sql = "INSERT INTO ".$this->table." (NOM_COULEUR) VALUES (:p_nom)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom',  $nom ,  PDO::PARAM_STR );
        $query->execute();    
    }

}

?>