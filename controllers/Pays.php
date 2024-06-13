<?php 
class Pays extends Controller {
    public function index() {
        $this->loadModel('Payss');
        $payss = $this->Payss->getAll_continent();

        $scriptjs = 'window.addEventListener("load", (event) =>  {
            let recherche = document.getElementById("search")
            recherche.addEventListener("keyup", (event) => {
                let search_value = recherche.value.toLowerCase();
                let tr = document.getElementsByTagName("tr");
        
        
                if (search_value === "") {
                    for (let i = 1; i < tr.length; i++) {
                        tr[i].style.display = "";
                    }
                    return; 
                }
                for (let i = 1; i < tr.length; i++) {
                    let tds = tr[i].getElementsByTagName("td");
                    tr[i].style.display = "none";
        
                    for (let j = 0; j < tds.length; j++) {
        
                        let txtValue = tds[j].textContent || tds[j].innerText;
                        if (txtValue.toLowerCase().indexOf(search_value) > -1) {
                            tr[i].style.display = "";
                        }
        
                    }
                }
            }, false);
        })';
        
                // On envoie les données à la vue index

        $this->render('index', compact('payss', 'scriptjs'));
    }

    public function modif(int $id) {
         // On instancie le modèle "Continent" Pour pouvoir générer
        // Le COMBO dans le formulaire
        $this->loadModel('Continent');
        // On stocke les continents dans $continents
        $continents = $this->Continent->getAll("NOM_CONTINENT asc");

        // On instancie le modèle "Pays"
        $this->loadModel('Payss');
        $this->Payss->id = array(
            'ID_PAYS' => $id
        );
        // Le pays a modifier
        $pays = $this->Payss->getOne();

        // On envoie les données à la vue modif
        $this->render('modif', compact('pays', 'continents'));
    }


    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'un Pays
     *
     * @param  int $id
     * @return void
     */

    public function modif_sauve(int $id){

    // On recupère les données envoyées par le formulaire
    $id = $_REQUEST['Id'];
    $nom = $_REQUEST['Nom'];
    $id_continent = $_REQUEST['Id_continent'];

    // On instancie le modèle "Payss"
    $this->loadModel('Payss');

    // On effectue la mise à jour
    $this->Payss->update($id, $nom, $id_continent);
    

    // On redirige vers la liste
    // On stocke les pays dans $payss
    $payss = $this->Payss->getAll_continent();
    
    $message = "Pays bien modifié";
    $type_message = "success";
    // On envoie les données à la vue index
    $this->render('index', compact('payss', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher un pays à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
         // On instancie le modèle "Continent" Pour pouvoir générer
        // Le COMBO dans le formulaire
        $this->loadModel('Continent');
        // On stocke les continents dans $continents
        $continents = $this->Continent->getAll("NOM_CONTINENT asc");

        // On instancie le modèle "Pays"
        $this->loadModel('Payss');

        // On stocke la couleur dans $pays
        $this->Payss->id = array(
            'ID_PAYS' => $id
        );
        $pays = $this->Payss->getOne();// Le pays a supprimer

        // On envoie les données à la vue modif
        $this->render('suppr', compact('pays', 'continents'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'un pays
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id){

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Pays"
        $this->loadModel('Payss');

        // On effectue la mise à jour
        $this->Payss->delete($id);

        // On redirige vers la liste
        // On stocke les couleur dans $couleurs
        $payss = $this->Payss->getAll_continent();
        
        $message = "Pays bien supprimée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('payss', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'un nouveau pays
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        //Création du COMBO continent

        // On instancie le modèle "Continent" Pour pouvoir générer
        // Le COMBO dans le formulaire
        $this->loadModel('Continent');
        // // On stocke les continents dans $continents
        $continents = $this->Continent->getAll("NOM_CONTINENT asc");


            
        // //FIN de Création du COMBO continent
        
        
        // // On affiche le formulaire
        $this->render('ajout', compact('continents'));
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'un nouveau pays
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve(){

        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];
        $id_continent = $_REQUEST['Id_continent'];

        // On instancie le modèle "Payss"
        $this->loadModel('Payss');

        // On effectue la mise à jour
        $this->Payss->insert($nom, $id_continent);

        // On redirige vers la liste
        // On stocke les couleur dans $couleurs
        $payss = $this->Payss->getAll_continent();
        
        $message = "Pays bien Ajouté";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('payss', 'message', 'type_message'));
    }




}
?>