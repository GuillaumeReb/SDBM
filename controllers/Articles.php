<?php

class Articles extends Controller{
    

    /**
     * Cette méthode affiche la liste des Continents
     *
     *
     * @return void
     */
    public function index() {
        // On instancie le modèle "Continent"
        
        $this->loadModel('Article');
        // On stocke les continent dans $continents
        $articles = $this->Article->getAll_marque_type_couleur_null();

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
        $this->render('index', compact('articles', 'scriptjs'));
    }

    /**
     * Méthode permettant d'afficher un continent à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function modif(int $id){
        // On instancie le modèle "Continent"
        $this->loadModel('Article');

        // On stocke le continent dans $continent
        $this->Article->id = array(
            'ID_ARTICLE' => $id
        );
        $article = $this->Article->getOne();

        $this->loadModel('Marque');
        $marque = $this->Marque->getAll("NOM_MARQUE asc");

        $this->loadModel('Type');
        $type = $this->Type->getAll("NOM_TYPE asc");

        $this->loadModel('Couleur');
        $couleur = $this->Couleur->getAll("NOM_COULEUR asc");

        // On envoie les données à la vue modif
        $this->render('modif', compact('marque', 'article', 'type','couleur'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'un Continent
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
        $id_marque = $_REQUEST['Id_marque'];
        $id_type = $_REQUEST['Id_type'];
        $id_couleur = $_REQUEST['Id_couleur'];

        // On instancie le modèle "Continent"
        $this->loadModel('Article');

        // On effectue la mise à jour
        $this->Article->update($id, $nom ,$id_type, $id_marque, $id_couleur);

        // On redirige vers la liste
        // On stocke les continent dans $continents
        $articles = $this->Article->getAll_marque_type_couleur_null();
        
        $message = "Article bien modifié";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('articles', 'message', 'type_message', "scriptjs"));
    }


    /**
     * Méthode permettant d'afficher un continent à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id){
        // On instancie le modèle "Continent"
        $this->loadModel('Article');

        // On stocke le continent dans $continent
        $this->Article->id = array(
            'ID_ARTICLE' => $id
        );
        $article = $this->Article->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('article'));
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

        // On instancie le modèle "Continent"
        $this->loadModel('Article');

        // On effectue la mise à jour
        $this->Article->delete($id);

        // On redirige vers la liste
        // On stocke les continent dans $continents
        $articles = $this->Article->getAll_marque_type_couleur_null();
        
        $message = "Article bien supprimé";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('articles', 'message', 'type_message','scriptjs'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'un nouveau Continent
     *
     * @param  void
     * @return void
     */
    public function ajout(){
        // On instancie le modèle "Pays"
        $this->loadModel('Marque');
        // On stocke les Pays dans $pays
        $marque = $this->Marque->getAll("NOM_MARQUE asc");

        // On instancie le modèle "Fabricant"
        $this->loadModel('Type');
        // On stocke les fabricants dans $fabricants
        $type = $this->Type->getAll("NOM_TYPE asc");

        $this->loadModel('Couleur');
        // On stocke les fabricants dans $fabricants
        $couleur = $this->Couleur->getAll("NOM_COULEUR asc");

        // On affiche le formulaire
        $this->render('ajout', compact('marque','type','couleur'));
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'un nouveau Continent
     * d'un Continent
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
        $id_marque = $_REQUEST['Id_marque'];
        $id_type = $_REQUEST['Id_type'];
        $id_couleur = $_REQUEST['Id_couleur'];

        // On instancie le modèle "Marque"
        $this->loadModel('Article');

        // On effectue la mise à jour
        $this->Article->insert($nom,$id_type ,$id_marque , $id_couleur);

        // On redirige vers la liste
        // On stocke les marques dans $marques
        $articles = $this->Article->getAll_marque_type_couleur_null();
        
        $message = "Article bien Ajoutée";
        $type_message = "success";
        
        // On envoie les données à la vue index
        $this->render('index', compact('articles', 'message', 'type_message', 'scriptjs'));
    }
}
?>