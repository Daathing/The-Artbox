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
    <?php 
        $key = $_GET['id']; 
        $infos = $oeuvres[$key];
                echo   '<article id="detail-oeuvre">
                            <div id="img-oeuvre">
                                <img src="img/'.$infos['picture'].'" alt="'.$infos['alt'].'">
                            </div>
                            <div id="contenu-oeuvre">
                                <h1>'.$infos['title'].'</h1>
                                <p class="description">'.$infos['artist'].'</p>
                                <p class="description-complete">'.$infos['description'].'</p>
                            </div>
                        </article>';
         
    ?>
</main>
    <?php include('footer.php'); ?>
</body>
</html>        
                        