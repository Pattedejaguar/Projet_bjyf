<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Maçonnerie Ocordo</title>
         <link href="https://fonts.googleapis.com/css?family=Coda|Faster+One&display=swap" rel="stylesheet"> 
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-w+8Gqjk9Cuo6XH9HKHG5t5I1VR4YBNdPt/29vwgfZR485eoEJZ8rJRbm3TR32P6k" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar d-flex justify-content-around">
                <?php 
//               on charge le fichier . xml
                $fichier = 'source.xml'; 
                //recupération du ficher dans une variable
                $xml = simplexml_load_file($fichier);
//              récupération de l'id des pages'
                $id = $_GET['id'];
//                création d'une boucle pour l'affichage des différentes pages
                foreach ($xml as $pages) {
                    ?>
                <!--intégration de la nav-bar dans la boucle pour afficher toutes les pages-->
                    <a class = "nav-link" href="<?= $pages['id'] ?>.html"><?= $pages->menu ?></a>
                <?php } ?>
            </nav>
            <?php
            echo '<br>';
            switch ($id) {
                case 1:
                    echo $xml->page[0]->content;
                    break;
                case 2:
                    echo $xml->page[1]->content;
                    break;
                case 3:

                    echo $xml->page[2]->content;
                    break;
                case 4:
                    echo $xml->page[3]->content;
                    break;
                default:
                    echo $xml->page[0]->content;
                    break;
            }
            ?>
        </div>
    </body>
</html>
