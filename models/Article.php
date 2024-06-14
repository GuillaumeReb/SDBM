<?php
/**
 * Classe Model Article

 */
class Article extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "article";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }
    public function getAll_marque_type_couleur_null(){
        $sql = "SELECT ID_ARTICLE, NOM_ARTICLE, NOM_MARQUE, NOM_TYPE, NOM_COULEUR
        FROM " .$this->table. " LEFT JOIN typebiere ";
        $sql .= " ON article.ID_TYPE=typebiere.ID_TYPE";
        $sql .= " INNER JOIN marque ON marque.ID_MARQUE=article.ID_MARQUE";
        $sql .= " LEFT JOIN couleur ON article.ID_COULEUR = couleur.ID_COULEUR";
        $sql .= " ORDER BY ID_ARTICLE";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
    /**
     * Met à jour le nom d'un Article à partir de son ID
     *
     * @param int $id
     * @param string $slug
     *@param int $id_type
     * @param int $id_marque
  * @param int $id_couleur
     * @return void
     */
    public function update(int $id, string $nom, ?int $id_type, int $id_marque, ?int $id_couleur) {

        $nom = htmlspecialchars($nom); // Faille XSS
        if (is_null($id_type)) {
        $sql = "UPDATE ".$this->table." set NOM_ARTICLE=:p_nom, ID_TYPE=NULL, ID_MARQUE=:p_marque, ID_COULEUR=:p_couleur WHERE ID_ARTICLE=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->bindParam(':p_nom',  $nom,  PDO::PARAM_STR );
        $query->bindParam(':p_marque', $id_marque, PDO::PARAM_INT);
        $query->bindParam(':p_couleur', $id_couleur, PDO::PARAM_INT);
        $query->execute();  
        } else if (is_null($id_couleur)){
            $sql = "UPDATE ".$this->table." set NOM_ARTICLE=:p_nom, ID_TYPE=:p_type, ID_MARQUE=:p_marque, ID_COULEUR=:NULL WHERE ID_ARTICLE=:p_id";
            $query = $this->_connexion->prepare($sql);

            $query->bindParam(':p_id', $id, PDO::PARAM_INT);
            $query->bindParam(':p_nom',  $nom, PDO::PARAM_STR);
            $query->bindParam(':p_type', $id_type, PDO::PARAM_INT);
            $query->bindParam(':p_marque', $id_marque, PDO::PARAM_INT);
            $query->execute();
        } else if (!is_null($id_couleur) && !is_null($id_type)) {
            $sql = "UPDATE ".$this->table." set NOM_ARTICLE=:p_nom, ID_TYPE=:p_type, ID_MARQUE=:p_marque, ID_COULEUR=:p_couleur WHERE ID_ARTICLE=:p_id";
            $query = $this->_connexion->prepare($sql);

            $query->bindParam(':p_id', $id, PDO::PARAM_INT);
            $query->bindParam(':p_nom', $nom, PDO::PARAM_STR);
            $query->bindParam(':p_type', $id_type, PDO::PARAM_INT);
            $query->bindParam(':p_marque', $id_marque, PDO::PARAM_INT);
            $query->bindParam(':p_couleur', $id_couleur, PDO::PARAM_INT);
            $query->execute();
        }
    }

    /**
     * Supprime un Article à partir de son ID
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $sql = "DELETE FROM ".$this->table." WHERE ID_ARTICLE=:p_id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':p_id', $id,  PDO::PARAM_INT );
        $query->execute();    
    }

     /**
     *
     * @param string $nom
     * @param string $id_type
     * @param int $id_marque
     * @param string $id_couleur
     * @return void
     */
    public function insert(string $nom, string $id_type,int $id_marque, string $id_couleur) {

        $nom = htmlspecialchars($nom); // Faille XSS
        
        if ($id_type == "NULL") {
            $sql = "INSERT INTO ".$this->table." (NOM_ARTICLE, ID_MARQUE, ID_COULEUR) VALUES (:p_nom, :p_id_marque, :p_id_couleur)";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR );
            $query->bindParam(':p_id_marque', $id_marque,  PDO::PARAM_INT );
            $query->bindParam(':p_id_couleur', $id_couleur,  PDO::PARAM_INT );
        } else  if ($id_couleur == "NULL"){
            $sql = "INSERT INTO ".$this->table." (NOM_ARTICLE, ID_MARQUE, ID_TYPE) VALUES (:p_nom, :p_id_marque, :p_id_type)";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR );
            $query->bindParam(':p_id_marque', $id_marque,  PDO::PARAM_INT );
            $query->bindParam(':p_id_type', $id_type,  PDO::PARAM_INT );
        } else {
            $sql = "INSERT INTO ".$this->table." (NOM_ARTICLE, ID_MARQUE, ID_TYPE, ID_COULEUR) VALUES (:p_nom, :p_id_marque, :p_id_type, :p_id_couleur)";
            $query = $this->_connexion->prepare($sql);
            $query->bindParam(':p_nom', $nom,  PDO::PARAM_STR );
            $query->bindParam(':p_id_marque', $id_marque,  PDO::PARAM_INT );
            $query->bindParam(':p_id_type', $id_type,  PDO::PARAM_INT );
            $query->bindParam(':p_id_couleur', $id_couleur,  PDO::PARAM_INT );
        }
        $query->execute();
    }

}

?>