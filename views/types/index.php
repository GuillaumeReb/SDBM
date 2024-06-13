<main class="container mb-5">
<h1 class="mt-5 mb-5">Gestion des Types</h1>
<a href="<?= PATH ?>/types/ajout/"><button type="button" class="btn btn-ajout">Ajouter</button></a>

<h1 class="mt-5 mb-3">Gestion des Types de bière</h1>
<a href="<?= PATH ?>/types/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

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
        <?php foreach($types as $type): ?>
            <tr>
                <td><?= $type['ID_TYPE'] ?></td>
                <td><?= $type['NOM_TYPE'] ?></td>
                <td>
                    <a href="<?= PATH ?>/types/modif/<?= $type['ID_TYPE'] ?>"><button
                        class="btn btn-primary mb-2">Modifier</button></a>
                    <a href="<?= PATH ?>/types/suppr/<?= $type['ID_TYPE'] ?>"><button
                        class="btn btn-danger mb-2">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</main>