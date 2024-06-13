<h1 class="mt-5 mb-3">Détail du Ticket : </h1>
<a href="<?= PATH ?>/vendres/ajout/"><button type="button" class="btn btn-primary">Ajouter un article</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" id="search" aria-label="Search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Code article</th>
            <th>Nom article</th>
            <th>Qté</th>
            <th>Prix vente</th>
            <th>Sous total</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($vendres as $vendre): ?>
            <tr>
                <td><?= $vendre['ANNEE'] ?></td>
                <td><?= $vendre['NUMERO_TICKET'] ?></td>
                <td><?= $vendre['DATE_VENTE'] ?></td>
                <td>
                    <a href="<?= PATH ?>/tickets/modif/<?= $vendre['ANNEE'] ?>"><button
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/tickets/suppr/<?= $vendre['ANNEE'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                    <a href="<?= PATH ?>/vendres/suppr/<?= $vendre['ANNEE'] ?>"><button
                        class="btn btn-warning bi bi-trash3">Détail</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
