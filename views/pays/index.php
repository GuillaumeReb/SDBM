<h1 class="mt-5 mb-3">Gestion des Pays</h1>
<a href="<?= PATH ?>/pays/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" id="search" aria-label="Search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Nom pays</th>
            <th>Nom Continent</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($payss as $pays): ?>
            <tr>
                <td><?= $pays['ID_PAYS'] ?></td>
                <td><?= $pays['NOM_PAYS'] ?></td>
                <td><?= $pays['NOM_CONTINENT'] ?></td>
                <td>
                    <a href="<?= PATH ?>/pays/modif/<?= $pays['ID_PAYS'] ?>"><button
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/pays/suppr/<?= $pays['ID_PAYS'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
