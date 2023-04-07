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
    <?php 
    include('header.php');
    include_once('oeuvres.php');
    ?>
    <main>
        <div id="liste-oeuvres">
            <?php
                foreach($oeuvres as $key => $infos) {
                    echo   '<article class="oeuvre">
                                    <a href="oeuvre.php?id='.$key.'"> 
                                        '.$infos['picture'].'
                                        <h2> '.$infos['title'].' </h2>
                                        <p class="description"> '.$infos['artist'].' </p>
                                    </a>
                                <a href="oeuvre.php"></a>
                            </article>';
                };
            ?>    
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>