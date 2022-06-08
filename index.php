<html>
    <head>
        <title>ESP_News</title>
        <link rel="stylesheet" type="text/css" href="stylesheets/css/style.css">
        <script src="stylesheets/js/script.js"></script>
    </head>

    <body>
        <header>
            <div class="logo">
                    <a href="" title="ESP_News">Actualites Polytechniciennes</a><br><br>
            </div><hr><br><br>
            <div class="conteneur">
                <nav>
                    <a href="index.php">Accueil</a>
                    <a href="sport.php">Sport</a>
                    <a href="sante.php">Santé</a>
                    <a href="education.php">Education</a>
                    <a href="politique.php">Politique</a>
                </nav>
            </div>  
        </header>

        <section>
        <h1 style="text-align:center">Dernieres actualites</h1><br>
        <div id="news"><?php 
            require "inclu/connexion.php";
            foreach ($Article as $art) { ?>
            <div class="news-wrap" data-id="<?=$art["id"]?>">
                <div class="news-title"><?=$art["titre"]?></div>
                <div class="news-desc"><?=$art["contenu"]?></div>
            </div>
            <?php }
            ?></div>
        </section>

        <footer>
            <div class="conteneur">    
                <?php echo date('Y'); ?> - Tous droits reservés - Ecole Superieure Polytechnique
            </div>
        </footer>
    </body>
</html>