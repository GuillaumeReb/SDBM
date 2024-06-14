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
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= PATH ?>/views/CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= PATH ?>/node_modules/sweetalert2/dist/sweetalert2.css">
</head>

<body>
        <header>
            <nav class="navbar navbar-expand-lg sticky-top p-5">
                <div class="container-fluid d-flex justify-content-around">
                    <a class="navbar-brand" href="<?= PATH ?>/">SDBM</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= PATH ?>/">Accueil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/articles">Articles</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/references">Gestion des Références</a>
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
                            $type_message = "info";
                        }
                        echo "<div class='alert alert-$type_message alert-dismissible'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                        $message
                    </div>";
                    }
          
        ?>
        
            <?= $content ?>
 
        

        <footer class="text-center d-flex justify-content-center align-items-center flex-column p-5">
            <h2>Société Des Bières du Monde</h2>
            <p>L'abus d'alcool est dangereux pour la santé A consommer avec modération</p>
            <span>Made by <a href="https://ouabdellahe.fr/" target="_blank">Abdellahe Ouammou</a> and <a href="https://guillaume-rebourgeon.fr/" target="_blank">Guillaume Rebourgeon</a></span>
            <p>Copyright 
            <?php echo date("Y"); ?> 
            Tous droits réservés.</p>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2924cc20ca.js" crossorigin="anonymous"></script>
        <script src="<?= PATH ?>/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
        <script>
        <?php
           echo @$scriptjs;
        ?>
        
        </script>
        <?php 
        if (isset($message)) {
            if (!isset($type_message)) {
                $icon = "info";
            }
            }
        if (isset($type_message) || isset($message)) {
        echo '<script>
            
            Swal.fire({
        position: "top",
        icon: "'.  $type_message . '",
        title: "' . $message.'",
        showConfirmButton: false,
        timer: 3000 
    });

        </script>';
        }
    ?>

</body>

</html>