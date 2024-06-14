<?php

class Marques extends Controller{
    

    /**
     * Cette méthode affiche la liste des Marques
     *
     *
     * @return void
     */
    public function index() {
        // On instancie le modèle "Marque"
        
        $this->loadModel('Marque');
        // On stocke les marque dans $marques
        $marques = $this->Marque->getAll_pays_fabricant_null();

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
        $this->render('index', compact('marques', 'scriptjs'));
    }

    /**
     * Méthode permettant d'afficher une marque à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function modif(int $id){
        // On instancie le modèle "Marque"
        $this->loadModel('Marque');

        // On stocke le marque dans $marque
        $this->Marque->id = array(
            'ID_MARQUE' => $id
        );
        $marque = $this->Marque->getOne();

        $this->loadModel('Payss');
        $Pays = $this->Payss->getAll("NOM_PAYS asc");

        $this->loadModel('Fabricant');
        $fabricants = $this->Fabricant->getAll("NOM_FABRICANT asc");

        // On envoie les données à la vue modif
        $this->render('modif', compact('marque', 'Pays', 'fabricants'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'une Marque
     *
     * @param  int $id
     * @return void
     */
    public function modif_sauve(int $id){
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
        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];
        $id_fab = $_REQUEST['Id_fabricant'];
        $id_pays = $_REQUEST['Id_pays'];

        // On instancie le modèle "Marque"
        $this->loadModel('Marque');

        // On effectue la mise à jour
        $this->Marque->update($id, $nom, $id_fab, $id_pays);

        // On redirige vers la liste
        // On stocke les marque dans $marques
        $marques = $this->Marque->getAll_pays_fabricant_null();
        
        $message = "Marque bien modifiée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('marques', 'message', 'type_message', "scriptjs"));
    }


    /**
     * Méthode permettant d'afficher un continent à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
        // On instancie le modèle "Continent"
        $this->loadModel('Marque');

        // On stocke le continent dans $continent
        $this->Marque->id = array(
            'ID_MARQUE' => $id
        );
        $marque = $this->Marque->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('marque'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'un Continent
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id){
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
        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Marque"
        $this->loadModel('Marque');

        // On effectue la mise à jour
        $this->Marque->delete($id);

        // On redirige vers la liste
        // On stocke les marque dans $marques
        $marques = $this->Marque->getAll_pays_fabricant_null();
        
        $message = "Marque bien supprimée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('marques', 'message', 'type_message','scriptjs'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'une nouvelle marque
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        // On instancie le modèle "Pays"
        $this->loadModel('Payss');
        // On stocke les Pays dans $pays
        $pays = $this->Payss->getAll("NOM_PAYS asc");

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');
        // On stocke les fabricants dans $fabricants
        $fabricants = $this->Fabricant->getAll("NOM_FABRICANT asc");

        // On affiche le formulaire
        $this->render('ajout', compact('pays','fabricants'));
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'une nouvelle marque
     * 
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve(){
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
        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];
        $id_fab = $_REQUEST['Id_fabricant'];
        $id_pays = $_REQUEST['Id_pays'];

        // On instancie le modèle "Marque"
        $this->loadModel('Marque');

        // On effectue la mise à jour
        $this->Marque->insert($nom, $id_fab, $id_pays);

        // On redirige vers la liste
        // On stocke les marque dans $marques
        $marques = $this->Marque->getAll_pays_fabricant_null();
        
        $message = "Marque bien Ajoutée";
        $type_message = "success";
        
        // On envoie les données à la vue index
        $this->render('index', compact('marques', 'message', 'type_message', 'scriptjs'));
    }
}
?>