<?php 
class Types extends Controller {
    public function index() {
        $this->loadModel('Type');
        $types = $this->Type->getAll();

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

        $this->render('index', compact('types', 'scriptjs'));
    }

    public function modif(int $id) {
        $this->loadModel('Type');
        $this->Type->id = array(
            'ID_TYPE' => $id
        );
        $type = $this->Type->getOne();
        $this->render('modif', compact('type'));
    }
    public function modif_sauve(int $id){

    // On recupère les données envoyées par le formulaire
    $id = $_REQUEST['Id'];
    $nom = $_REQUEST['Nom'];

    // On instancie le modèle "Type"
    $this->loadModel('Type');

    // On effectue la mise à jour
    $this->Type->update($id, $nom);
    

    // On redirige vers la liste
    // On stocke les type dans $types
    $types = $this->Type->getAll();
    
    $message = "Type bien modifié";
    $type_message = "success";
    // On envoie les données à la vue index
    $this->render('index', compact('types', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher un type à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
        // On instancie le modèle "Type"
        $this->loadModel('Type');

        // On stocke le type dans $type
        $this->Type->id = array(
            'ID_TYPE' => $id
        );
        $type = $this->Type->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('type'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'un type
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id){

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Type"
        $this->loadModel('Type');

        // On effectue la mise à jour
        $this->Type->delete($id);

        // On redirige vers la liste
        // On stocke les type dans $types
        $types = $this->Type->getAll();
        
        $message = "Type bien supprimé";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('types', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'un nouveau type
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        // On affiche le formulaire
        $this->render('ajout', array());
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'un nouveau Type
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve(){

        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Type"
        $this->loadModel('Type');

        // On effectue la mise à jour
        $this->Type->insert($nom);

        // On redirige vers la liste
        // On stocke les type dans $types
        $types = $this->Type->getAll();
        
        $message = "Type bien Ajouté";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('types', 'message', 'type_message'));
    }




}
?>