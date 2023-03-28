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
        <?php

        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', '%Messi2004');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM circuits INNER JOIN pilotes ON circuits.pilote_id = pilotes.pilote_id 
        WHERE pilote_nom LIKE '%$nom_correct%' OR pilote_prenom LIKE '%$nom_correct%'";
        $resultat = $mabd->query($req);

        foreach ($resultat as $value){
            echo '<div class="circuit">';
                echo '<div class="photo-circuit"style=background:url(images/upload/'.$value['circuit_photo'].');background-size:cover;background-repeat:no-repeat;background-position:50%;></div>';
                echo '<div class="histoire-circuit">';
                    echo '<div class="nom-circuit">'.$value['circuit_nom'].'</div>';
                    echo '<div class="lieu-circuit">'.$value['circuit_ville'].', '.$value['circuit_pays'].'</div>';
                    echo '<div class="ouverture"><strong>Ouverture : </strong>'.$value['circuit_ouverture'].'</div>';
                    echo '<div class="longueur"><strong>Longueur : </strong>'.$value['circuit_longueur'].' km</div>';
                    echo '<div class="capacite"><strong>Capacité : </strong>'.$value['circuit_capacite'].'</div>';
                    echo '<div class="meilleur-tour">';
                        echo '<div class="titre-lap">Meilleur tour :</div>';
                        echo '<div class="pilote-lap">'.$value['pilote_prenom'].' '.$value['pilote_nom'].' ('.$value['pilote_nationalite'].') | '.$value['circuit_anneelap'].'<br>'.$value['circuit_tempslap'].'</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }

        if ($resultat -> rowCount() == 0) {
            echo "<div class=phrase-resultat><p>Désolé, il n'y a aucun résultat concernant votre recherche.</p>";
            echo '<div id="bouton-retour-accueil"><form action="form_recherche.php"><button style=text-transform:uppercase>Refaire une recherche</button></form></div></div>';
        }
        ?>
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