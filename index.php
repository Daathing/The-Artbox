<!doctype php>
<php lang="fr">
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
    ?>
    <main>
        <div id="liste-oeuvres">
            <article class="oeuvre">
                <a href="oeuvre-1.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre1['picture'];
                        echo $oeuvre1['title'];
                        echo $oeuvre1['artist'];
                        break;
                    }
                    ?>
                </a>
                <a href="oeuvre.php?$oeuvre1"></a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-2.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre2['picture'];
                        echo $oeuvre2['title'];
                        echo $oeuvre2['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-3.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre3['picture'];
                        echo $oeuvre3['title'];
                        echo $oeuvre3['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-4.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre4['picture'];
                        echo $oeuvre4['title'];
                        echo $oeuvre4['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-5.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre5['picture'];
                        echo $oeuvre5['title'];
                        echo $oeuvre5['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-6.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre6['picture'];
                        echo $oeuvre6['title'];
                        echo $oeuvre6['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-7.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre7['picture'];
                        echo $oeuvre7['title'];
                        echo $oeuvre7['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-8.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre8['picture'];
                        echo $oeuvre8['title'];
                        echo $oeuvre8['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-9.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre9['picture'];
                        echo $oeuvre9['title'];
                        echo $oeuvre9['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-10.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre10['picture'];
                        echo $oeuvre10['title'];
                        echo $oeuvre10['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-11.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre11['picture'];
                        echo $oeuvre11['title'];
                        echo $oeuvre11['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-12.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre12['picture'];
                        echo $oeuvre12['title'];
                        echo $oeuvre12['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-13.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre13['picture'];
                        echo $oeuvre13['title'];
                        echo $oeuvre13['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-14.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre14['picture'];
                        echo $oeuvre14['title'];
                        echo $oeuvre14['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
            <article class="oeuvre">
                <a href="oeuvre-15.php">
                    <?php 
                        include('oeuvres.php');
                        foreach ($oeuvres as $infos) {
                        echo $oeuvre15['picture'];
                        echo $oeuvre15['title'];
                        echo $oeuvre15['artist'];
                        break;
                    }
                    ?>
                </a>
            </article>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</php>