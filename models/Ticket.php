<?php
/**
 * Classe Model Ticket

 */
class Ticket extends Model {
    public function __construct(){
        $this->table = "ticket";
        $this->getConnection();
    }
    public function update(int $an, string $num, string $date){
        $nom = htmlspecialchars($an); // Faille XSS
        $sql = "UPDATE ".$this->table." set NUMERO_TICKET=:p_num WHERE ANNEE=:p_an";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(":p_an", $an, PDO::PARAM_INT);
        $query->bindParam(":p_num", $num, PDO::PARAM_STR);
        $query->bindParam(":p_date", $date, PDO::PARAM_STR);
        $query->execute();
    }


    /**
     * Supprime un Ticket à partir de son ID
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
     * Ajoute un Ticket 
     *
     * @param string $an
     * @return void
     */
    public function insert(string $an) {

        $an = htmlspecialchars($an); // Faille XSS
        
        $sql = "INSERT INTO ".$this->table." (ANNEE) VALUES (:p_an)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_an',  $nom ,  PDO::PARAM_STR );
        $query->execute();    
    }

}

?>