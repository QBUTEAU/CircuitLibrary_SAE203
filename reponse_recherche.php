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
    <title>Circuit Library - VOTRE RECHERCHE</title>
</head>
<body>
    <?php
        require ("partials/header.php");

        if ((empty($_POST['recherche']))){
            header('Location: form_recherche.php');
        }

        $nom = $_POST['recherche'];
        if($nom==null) {
            header('Location: form_recherche.php?erreurnom=1');
            }
        $nom_correct = filter_var($nom , FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <section>
        <div id="accueil">
            <div id="titre-texte">
                <?php
                    echo '<p>Voici ce que renvoie votre recherche concernant 
                    <strong style="color:#ED1D24 ; text-transform:uppercase">'.$nom_correct.'</strong>.</p>'
                ?>
            </div>
        </div>

        <div class="blocs-circuits">
            <div class="circuit">
                <div class="photo-circuit"></div>
                <div class="histoire-circuit">
                    <div class="nom-circuit">Circuit de Spa-Francorchamps</div>
                    <div class="lieu-circuit">Francorchamps, Belgique</div>
                    <div class="date-long">
                        <div class="ouverture"><strong>Ouverture :</strong> 1921</div>
                        <div class="longueur"><strong>Longueur :</strong> 7,004 km</div>
                    </div>
                    <div class="capacite"><strong>Capacité :</strong> 90 000</div>
                    <div class="meilleur-tour">
                        <div class="titre-lap">Meilleur tour :</div>
                        <div class="pilote-lap">Lewis Hamilton (GB) | 2020<br>1'41''252</div>
                    </div>
                </div>
            </div>
            <div class="circuit">
                <div class="photo-circuit"></div>
                <div class="histoire-circuit">
                    <div class="nom-circuit">Circuit de Monaco</div>
                    <div class="lieu-circuit">Monte-Carlo, Monaco</div>
                    <div class="date-long">
                        <div class="ouverture"><strong>Ouverture :</strong> 1929</div>
                        <div class="longueur"><strong>Longueur :</strong> 3,337 km</div>
                    </div>
                    <div class="capacite"><strong>Capacité :</strong> 37 000</div>
                    <div class="meilleur-tour">
                        <div class="titre-lap">Meilleur tour :</div>
                        <div class="pilote-lap">Lewis Hamilton (GB) | 2019<br>1'10''166</div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php
        require ("partials/footer.php");
    ?>
</body>
</html>