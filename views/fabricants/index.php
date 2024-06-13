<main class="container mb-5">
<h1 class="mt-5 mb-5">Gestion des Fabricants</h1>
<a href="<?= PATH ?>/fabricants/ajout/"><button type="button" class="btn btn-ajout mb-2">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" aria-label="Search" id="search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($fabricants as $fabricant): ?>
            <tr>
                <td><?= $fabricant['ID_FABRICANT'] ?></td>
                <td><?= $fabricant['NOM_FABRICANT'] ?></td>
                <td>
                    <a href="<?= PATH ?>/fabricants/modif/<?= $fabricant['ID_FABRICANT'] ?>"><button
                        class="btn btn-primary mb-2">Modifier</button></a>
                    <a href="<?= PATH ?>/fabricants/suppr/<?= $fabricant['ID_FABRICANT'] ?>"><button
                        class="btn btn-danger mb-2">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</main>
