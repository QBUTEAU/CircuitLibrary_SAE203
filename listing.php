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
    <title>Circuit Library - LES CIRCUITS</title>
</head>
<body>
    <?php
        require ("partials/header.php");
    ?>

    <section>
        <div id="accueil">
            <div id="titre-texte">
                <strong>CATALOGUE</strong><br>
                Voici une liste de circuits qui ont marqué les sports mécaniques !.
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
                    <div class="nom-circuit">Circuit de Nevers Magny-Cours</div>
                    <div class="lieu-circuit">Magny-Cours, France</div>
                    <div class="date-long">
                        <div class="ouverture"><strong>Ouverture :</strong> 1960</div>
                        <div class="longueur"><strong>Longueur :</strong> 4,411 km</div>
                    </div>
                    <div class="capacite"><strong>Capacité :</strong> 139 112</div>
                    <div class="meilleur-tour">
                        <div class="titre-lap">Meilleur tour :</div>
                        <div class="pilote-lap">Fernando Alonso (ESP) | 2004<br>1'13''698</div>
                    </div>
                </div>
            </div>
            <div class="circuit">
                <div class="photo-circuit">
                </div>
                <div class="histoire-circuit">
                    <div class="nom-circuit">Circuit de Silverstone</div>
                    <div class="lieu-circuit">Silverstone, Grande-Bretagne</div>
                    <div class="date-long">
                        <div class="ouverture"><strong>Ouverture :</strong> 1947</div>
                        <div class="longueur"><strong>Longueur :</strong> 5,412 km</div>
                    </div>
                    <div class="capacite"><strong>Capacité :</strong> 150 000</div>
                    <div class="meilleur-tour">
                        <div class="titre-lap">Meilleur tour :</div>
                        <div class="pilote-lap">Max Verstappen (P-B) | 2020<br>1'27''264</div>
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

        <form action="/">
            <div id="bouton-retour">
                <input type="submit" value="RETOUR">
            </div>
        </form>
    </section>

    <?php
        require ("partials/footer.php");
    ?>

</body>
</html>