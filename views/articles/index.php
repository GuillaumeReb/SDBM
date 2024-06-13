<main class="container">
<h1 class="mt-5 mb-5">Gestion des Articles</h1>
<a href="<?= PATH ?>/articles/ajout/"><button type="button" class="btn btn-ajout mt-5 mb-3">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" aria-label="Search" id="search">
<div class="d-flex justify-content-center align-items-center">
<table class="table table-bordered table-article">
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
                        class="btn btn-primary mb-2 "><i class="fa-solid fa-pencil"></i></button></a>
                    <a href="<?= PATH ?>/articles/suppr/<?= $article['ID_ARTICLE'] ?>"><button
                        class="btn btn-danger mb-2 "><i class="fa-solid fa-trash-can"></i></button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
</div>
</main>