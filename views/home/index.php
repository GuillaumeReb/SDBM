<main>

<div class="d-flex flex-lg-row flex-column align-items-center justify-content-around accueilblock">
<div class="accueilpara">
<h1 class="titre mb-3">Bienvenue</h1>
<div id="typewriter" class="sdbm">Société Des Bières du Monde</div>
<p class="para">Sur ce site, vous découvrirez le projet qu'on a développé,<br> un
gestionnaire de Bières ainsi que la gestion de ces références.</p>
<div class="mt-5">
<a class="lien-btn" href="<?= PATH ?>/articles"><button class="btn btn-accueil1 ">Articles</button></a>
<a class="lien-btn" href="<?= PATH ?>/references"><button class="btn btn-accueil2">Références</button></a>
</div>
</div>

<div class="imgbiere">
    <img src="./views/images/biere.jpg" alt="biere" class="responsive-img">
</div>
</div>

<script>
        // Fonction pour l'animation de la machine à écrire
        function typeWriter(text, elementId, delay = 140) {
            let i = 0;
            let element = document.getElementById(elementId);
            let originalText = text; // Sauvegarde du texte original
            

            function type() {
                if (i < text.length) {
                    // Ajouter le caractère suivant
                    element.innerHTML = text.substring(0, i + 1) + '_';
                    i++;
                    setTimeout(type, delay);
                } else {
                    // Retirer le curseur à la fin de l'animation
                    element.innerHTML = text;
                     // Réinitialiser pour la prochaine itération
                     setTimeout(function() {
                        text = originalText; // Réinitialisation du texte
                        i = 0; // Réinitialisation de l'index
                        type(); // Lancer à nouveau l'animation
                    }, 10000); // Attendre 10 secondes avant de recommencer
                }
            }

            type();
        }

        // Exemple de texte à afficher
        const text = 'Société Des Bières du Monde.';

        // Lancer l'animation
        typeWriter(text, 'typewriter');
    </script>



</main>