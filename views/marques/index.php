<main class="container">
<h1 class="mt-5 mb-5">Gestion des Marques</h1>
<a href="<?= PATH ?>/marques/ajout/"><button type="button" class="btn btn-ajout">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" aria-label="Search" id="search">

<table class="table table-bordered table-marque">
    <thead>
        <tr>
            <th>Code</th>
            <th>Marques</th>
            <th>Fabricants</th>
            <th>Pays</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($marques as $marque): ?>
            <tr>
                <td><?= $marque['ID_MARQUE'] ?></td>
                <td><?= $marque['NOM_MARQUE'] ?></td>
                <td><?= $marque['NOM_FABRICANT'] ?></td>
                <td><?= $marque['NOM_PAYS'] ?></td>
                <td>
                    <a href="<?= PATH ?>/marques/modif/<?= $marque['ID_MARQUE'] ?>"><button
                        class="btn btn-primary mb-2">Modifier</button></a>
                    <a href="<?= PATH ?>/marques/suppr/<?= $marque['ID_MARQUE'] ?>"><button
                        class="btn btn-danger mb-2">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</main>