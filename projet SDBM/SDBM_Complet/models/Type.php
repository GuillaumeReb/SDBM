<?php
/**
 * Classe Model Type

 */
class Type extends Model {
    public function __construct(){
        $this->table = "type";
        $this->getConnection();
    }
    public function update(int $id, string $nom){
        $nom = htmlspecialchars($nom); // Faille XSS
        $sql = "UPDATE ".$this->table." set NOM_TYPE=:p_nom WHERE ID_TYPE=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(":p_id", $id, PDO::PARAM_INT);
        $query->bindParam(":p_nom", $nom, PDO::PARAM_STR);
        $query->execute();
    }


    /**
     * Supprime un type à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM ".$this->table." WHERE ID_TYPE=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->execute();    
    }

     /**
     * Ajoute un type 
     *
     * @param string $nom
     * @return void
     */
    public function insert(string $nom) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        $sql = "INSERT INTO ".$this->table." (NOM_TYPE) VALUES (:p_nom)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom',  $nom ,  PDO::PARAM_STR );
        $query->execute();    
    }

}

?>