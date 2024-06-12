<h1 class="mt-5 mb-3">Gestion des Couleurs</h1>
<a href="<?= PATH ?>/couleurs/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

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
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/couleurs/suppr/<?= $couleur['ID_COULEUR'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
