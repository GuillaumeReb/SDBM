<h1 class="mt-5 mb-3">Gestion des Tickets</h1>
<a href="<?= PATH ?>/tickets/ajout/"><button type="button" class="btn btn-primary">Ajouter</button></a>

<input class="form-control mb-2 mt-3" type="search" placeholder="Rechercher" id="search" aria-label="Search">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Année</th>
            <th>N° du ticket</th>
            <th>Horodatage</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tickets as $ticket): ?>
            <tr>
                <td><?= $ticket['ANNEE'] ?></td>
                <td><?= $ticket['NUMERO_TICKET'] ?></td>
                <td><?= $ticket['DATE_VENTE'] ?></td>
                <td>
                    <a href="<?= PATH ?>/tickets/modif/<?= $ticket['ANNEE'] ?>"><button
                        class="btn btn-success bi bi-pencil">Modifier</button></a>
                    <a href="<?= PATH ?>/tickets/suppr/<?= $ticket['ANNEE'] ?>"><button
                        class="btn btn-danger bi bi-trash3">Supprimer</button></a>
                    <a href="<?= PATH ?>/vendres/suppr/<?= $ticket['ANNEE'] ?>"><button
                        class="btn btn-warning bi bi-trash3">Détail</button></a>
                </td>
</tr>

<?php endforeach ?>
        </tbody>
    </table>
