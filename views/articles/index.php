<h1 class="mt-5 mb-3">Gestion des Articles</h1>
<a href="<?= PATH ?>/articles/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" aria-label="Search" id="search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code</th>
            <th>Articles</th>
            <th>Types</th>
            <th>Marques</th>
            <th>Couleurs</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($articles as $article): ?>
            <tr>
                <td><?= $article['ID_ARTICLE'] ?></td>
                <td><?= $article['NOM_ARTICLE'] ?></td>
                <td><?= $article['NOM_TYPE'] ?></td>
                <td><?= $article['NOM_MARQUE'] ?></td>
                <td><?= $article['NOM_COULEUR'] ?></td>
                <td>
                    <a href="<?= PATH ?>/articles/modif/<?= $article['ID_ARTICLE'] ?>"><button
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/articles/suppr/<?= $article['ID_ARTICLE'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
