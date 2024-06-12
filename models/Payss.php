<?php
/**
 * Classe Model Pays
 */
class Payss extends Model {
    public function __construct(){
        $this->table = "pays";
        $this->getConnection();
    }
    public function update(int $id, string $nom){
        $nom = htmlspecialchars($nom); // Faille XSS
        $sql = "UPDATE ".$this->table." set NOM_PAYS=:p_nom WHERE ID_PAYS=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(":p_id", $id, PDO::PARAM_INT);
        $query->bindParam(":p_nom", $nom, PDO::PARAM_STR);
        $query->bindParam(':p_cont', $id_cont,  PDO::PARAM_INT );
        $query->execute();
    }

    //Permet de récupérer tous les continents
    public function getAll_continent(){
        $sql = "select * from ". $this->table." inner join continent 
        on pays.ID_CONTINENT = continent.ID_CONTINENT
        order by NOM_PAYS asc";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query -> fetchAll();
    }


    /**
     * Supprime un pays à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM ".$this->table." WHERE ID_PAYS=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->execute();    
    }

     /**
     * Ajoute un Pays
     *
     * @param string $nom
     * @param int $id_continent
     * @return void
     */
    public function insert(string $nom, int $id_continent) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        $sql = "INSERT INTO ".$this->table." (NOM_PAYS, ID_CONTINENT) VALUES (:p_nom, :p_id_continent)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_nom',  $nom ,  PDO::PARAM_STR );
        $query->bindParam(':p_id_continent', $id_continent,  PDO::PARAM_INT );
        $query->execute();    
    }

}

?>