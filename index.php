<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>projet-php</title>
    </head>
    <body>
        <?php
        $fichier = 'source.xml'; //recupération du ficher dans une variable
        $xml = simplexml_load_file($fichier); //chargement du fichier
        foreach ($xml as $pages) {
            echo $pages->menu;
            echo $pages->title;
            echo $pages->content;
        }
        $xml = simplexml_load_file('source.xml');
        $id = $_GET['id'];
        foreach ($xml as $pages){
        ?>
        <a href="index.php?id=<?= $pages['id'] ?>"><?= $pages->menu ?></a>
    <?php } ?>
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

    </body>
</html>