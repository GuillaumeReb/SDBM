<?php 
class Vendres extends Controller {
    public function index() {
        $this->loadModel('Vendre');
        $vendres = $this->Vendre->getAll();

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

        $this->render('index', compact('vendres', 'scriptjs'));
    }

    public function modif(int $an) {
        $this->loadModel('Ticket');
        $this->Ticket->an = array(
            'ANNEE' => $an,
            'NUMERO_TICKET' => $num
        );
        
        $ticket = $this->Ticket->getOne();
        $this->render('modif', compact('ticket'));
    }
    public function modif_sauve(int $id){

    // On recupère les données envoyées par le formulaire
    $an = $_REQUEST['Annee'];
    $num = $_REQUEST['Num'];
    $date = $_REQUEST['Date'];

    // On instancie le modèle "Ticket"
    $this->loadModel('Ticket');

    // On effectue la mise à jour
    $this->Ticket->update($an, $num, $date);
    

    // On redirige vers la liste
    // On stocke les ticket dans $tickets
    $tickets = $this->Ticket->getAll();
    
    $message = "Ticket bien modifié";
    $type_message = "success";
    // On envoie les données à la vue index
    $this->render('index', compact('couleurs', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher une couleur à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On stocke la couleur dans $couleur
        $this->Couleur->id = array(
            'ID_COULEUR' => $id
        );
        $couleur = $this->Couleur->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('couleur'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'une couleur
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id){

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On effectue la mise à jour
        $this->Couleur->delete($id);

        // On redirige vers la liste
        // On stocke les couleur dans $couleurs
        $couleurs = $this->Couleur->getAll();
        
        $message = "Couleur bien supprimée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('couleurs', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'une nouvelle couleur
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        // On affiche le formulaire
        $this->render('ajout', array());
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'une nouvelle Couleur
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve(){

        // On recupère les données envoyées par le formulaire
        $an = $_REQUEST['Annee'];

        // On instancie le modèle "Ticket"
        $this->loadModel('Ticket');

        // On effectue la mise à jour
        $this->Ticket->insert($an);

        // On redirige vers la liste
        // On stocke les ticket dans $tickets
        $tickets = $this->Ticket->getAll();
        
        $message = "Ticket bien Ajoutée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('tickets', 'message', 'type_message'));
    }




}
?>