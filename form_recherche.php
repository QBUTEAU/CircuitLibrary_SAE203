<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Circuit Library - RECHERCHER</title>
</head>
<body>
    <?php
        require ("partials/header.php");
    ?>

    <section>
        <div id="accueil">
            <div id="titre-texte">
                <strong>RECHERCHER</strong><br>
                Recherchez sur quel circuit votre pilote préféré a fait le meilleur tour !
            </div>
        </div>

        <form action="reponse_recherche.php" method="post">
            <div id="bloc_recherche">
                <h2>Verstappen, Prost, Bottas...<br>Trouvez sur quel circuit votre
                    pilote a été le plus rapide !
                </h2>
                <div id="label-input-recherche">
                    <div><label for="recherche">TAPEZ LE NOM :</label></div>
                    <div><input type="text" name="recherche" id="recherche" placeholder="Schumacher"></div>
                </div>
                <?php
                    if (isset($_GET['erreurnom'])) {
                        echo '<p><strong><I>Vous devez saisir un nom pour effectuer une recherche.</I></strong></p>';
                    }
                ?>
                <div id="bouton-recherche">
                    <input type="submit" value="AFFICHER LE(S) CIRCUIT(S)">
                </div>
            </div>
        </form>
    </section>

    <?php
        require ("partials/footer.php");
    ?>
</body>
</html>