<?php 
class Continents extends Controller {
    public function index() {
        $this->loadModel('Continent');
        $continents = $this->Continent->getAll();
        $this->render('index', compact('continents'));
    }

    public function modif(int $id) {
        $this->loadModel('Continent');
        $this->Continent->id = array(
            'ID_CONTINENT' => $id
        );
        $continent = $this->Continent->getOne();
        $this->render('modif', compact('continent'));
    }
    public function modif_sauve(int $id){

    // On recupère les données envoyées par le formulaire
    $id = (int) $_REQUEST['Id'];
    $nom = $_REQUEST['Nom'];

    // On instancie le modèle "Continent"
    $this->loadModel('Continent');

    // On effectue la mise à jour
    $this->Continent->update($id, $nom);
    

    // On redirige vers la liste
    // On stocke les continent dans $continents
    $continents = $this->Continent->getAll();
    
    //$message = "Continent bien modifié";
    //$type_message = "success";
    // On envoie les données à la vue index
    $this->render('index', compact('continents'));
    }

}
?>