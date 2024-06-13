<main class="container vh-100">
<h1 class="mt-5 mb-5">Gestion des Couleurs</h1>
<a href="<?= PATH ?>/couleurs/ajout/"><button type="button" class="btn btn-ajout">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" id="search" aria-label="Search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($couleurs as $couleur): ?>
            <tr>
                <td><?= $couleur['ID_COULEUR'] ?></td>
                <td><?= $couleur['NOM_COULEUR'] ?></td>
                <td>
                    <a href="<?= PATH ?>/couleurs/modif/<?= $couleur['ID_COULEUR'] ?>"><button
                        class="btn btn-primary mb-2">Modifier</button></a>
                    <a href="<?= PATH ?>/couleurs/suppr/<?= $couleur['ID_COULEUR'] ?>"><button
                        class="btn btn-danger mb-2">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</main>
