<h1 class="mt-5 mb-3">Gestion des Continents</h1>
<a href="<?= PATH ?>/continents/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

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
        <?php foreach($continents as $continent): ?>
            <tr>
                <td><?= $continent['ID_CONTINENT'] ?></td>
                <td><?= $continent['NOM_CONTINENT'] ?></td>
                <td>
                    <a href="<?= PATH ?>/continents/modif/<?= $continent['ID_CONTINENT'] ?>"><button
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/continents/suppr/<?= $continent['ID_CONTINENT'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
