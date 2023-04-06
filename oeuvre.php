<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <?php 
                include('oeuvres.php');
                foreach($oeuvres as $infos) {
                echo $oeuvre1['picture'];
                break;
            }
            ?>
        </div>
        <div id="contenu-oeuvre">
            <?php
                include('oeuvres.php');
                foreach($oeuvres as $infos) {
                echo $oeuvre1['title'];
                echo $oeuvre1['artist'];
                echo $oeuvre1['description'];
                break;
            }
            ?>
        </div>
    </article>
</main>
<?php include('footer.php'); ?>
</body>
</html>
