<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Maçonnerie Ocordo</title>
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-w+8Gqjk9Cuo6XH9HKHG5t5I1VR4YBNdPt/29vwgfZR485eoEJZ8rJRbm3TR32P6k" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <nav class="nav justify-content-center">
                <?php
                $fichier = 'source.xml'; //recupération du ficher dans une variable
                $xml = simplexml_load_file($fichier);
                $id = $_GET['id'];
                foreach ($xml as $pages) {
                    ?>
                    <a class =" nav-link" href="<?= $pages['id'] ?>.html"><?= $pages->menu ?></a>
                <?php } ?>
            </nav>
            <?php
            echo '<br>';
            switch ($id) {
                case 1:
                    echo $xml->page[0]->title;
                    echo $xml->page[0]->content;
                    break;
                case 2:
                    echo $xml->page[1]->title;
                    echo $xml->page[1]->content;
                    break;
                case 3:
                    echo $xml->page[2]->title;
                    echo $xml->page[2]->content;
                    break;
                case 4:
                    echo $xml->page[3]->title;
                    echo $xml->page[3]->content;
                    break;
                default:
                    echo $xml->page[0]->title;
                    echo $xml->page[0]->content;
                    break;
            }
            ?>
        </div>
    </body>
</html>
