<main  class="container vh-100">
<h1 class="mt-5 mb-5">Gestion des Continents</h1>
<a href="<?= PATH ?>/continents/ajout/"><button type="button" class="btn btn-ajout">Ajouter</button></a>

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
                        class="btn btn-primary mb-2">Modifier</button></a>
                    <a href="<?= PATH ?>/continents/suppr/<?= $continent['ID_CONTINENT'] ?>"><button
                        class="btn btn-danger mb-2">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</main>
