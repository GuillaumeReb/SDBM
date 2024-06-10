<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo @$Titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= PATH ?>/">SDBM</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= PATH ?>/">Accueil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/articles">Articles</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/continents">Continents</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/couleur">Couleurs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/couleur">Pays</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/fabricant">Fabricants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/marque">Marques</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/ticket">Tickets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/typebiere">Type Bière</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= PATH ?>/vendre">Vente</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?php
            // Y a t il un message d'alert à afficher
            if (isset($message)) {
                if (!isset($type_message)) {
                    $type_message ="info";
                }
                echo "<div class='alert alert-$type_message alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    $message
                </div>";
            }
        ?>
        <main class="container">
            <?= $content ?>
        </main>
        

        <footer>
            <h2>SDBM</h2>
            <p>L'abus d'alcool est dangereux pour la santé A consommer avec modération</p>
            <span>Made by Abdellahe Ouammou and Guillaume Rebourgeon</span>
            <p>Copyright 2024</p>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
        <script>
        <?php
           // echo @$scriptJS;
        ?>
        </script>
    

</body>

</html>