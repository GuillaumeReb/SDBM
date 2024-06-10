<?php 
class Couleurs extends Controller {
    public function index() {
        $this->loadModel('Couleur');
        $couleurs = $this->Couleur->getAll();
        $this->render('index', compact('couleurs'));
    }

    public function modif(int $id) {
        $this->loadModel('Couleur');
        $this->Continent->id = array(
            'ID_COULEUR' => $id
        );
        $continent = $this->Continent->getOne();
        $this->render('modif', compact('couleur'));
    }
    public function modif_sauve(int $id){

    // On recupère les données envoyées par le formulaire
    $id = $_REQUEST['Id'];
    $nom = $_REQUEST['Nom'];

    // On instancie le modèle "Continent"
    $this->loadModel('Couleur');

    // On effectue la mise à jour
    $this->Couleur->update($id, $nom);
    

    // On redirige vers la liste
    // On stocke les continent dans $continents
    $couleurs = $this->Couleur->getAll();
    
    //$message = "Continent bien modifié";
    //$type_message = "success";
    // On envoie les données à la vue index
    $this->render('index', compact('couleurs'));
    }

}
?>