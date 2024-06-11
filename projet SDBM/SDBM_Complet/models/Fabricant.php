<?php
/**
 * Classe Model fabricant

 */
class Fabricant extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "fabricant";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    /**
     * Met à jour le nom d'un fabricant à partir de son ID
     *
     * @param int $id
     * @param string $slug
     * @return void
     */
    public function update(int $id, string $nom) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        $sql = "UPDATE ".$this->table." set NOM_FABRICANT=:p_nom WHERE ID_FABRICANT=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->bindParam(':p_nom',  $nom ,  PDO::PARAM_STR );
        $query->execute();  
    }

    /**
     * Supprime un fabricant à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM ".$this->table." WHERE ID_FABRICANT=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->execute();    
    }

     /**
     * Ajoute un fabricant 
     *
     * @param string $nom
     * @return void
     */
    public function insert(string $nom) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        $sql = "INSERT INTO ".$this->table." (NOM_FABRICANT) VALUES (:p_nom)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom',  $nom ,  PDO::PARAM_STR );
        $query->execute();    
    }

}
?>