<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles-mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Circuit Library - ADMINISTRATION</title>
</head>
<body>
    <?php
        require ("../partials/header.php");
    ?>

    <section>
        <div id="accueil">
            <div id="titre-texte">
                <strong>AJOUTER UN CIRCUIT</strong>
            </div>
        </div>
        <div id="boutons-retour-ajouter">
            <div id="bouton-retour-accueil">
                <form action="../index.php"><button style=text-transform:uppercase>Retour à l'accueil</button></form>
            </div>
            <div id="bouton-retour-gestion">
                <form action="table1_gestion.php"><button style=text-transform:uppercase>Retour au tableau</button></form>
            </div>
        </div>
    </section>

    <div id="formulaire">
        <form method="POST" action="table1_new_valide.php" enctype="multipart/form-data">
            <div>Nom du circuit : <input type="text" name="nom" placeholder="Circuit de l'IUT de Troyes"></div>
            <div id="ajouter-ville-pays">
                <div>Ville : <input type="text" name="ville" placeholder="Troyes"></div>
                <div>Pays : <input type="text" name="pays" placeholder="France"></div>
            </div>
            <div id="open-length">
                <div>Ouverture : <input type="text" name="ouverture" placeholder="2004"></div>
                <div>Longueur : <input type="text" name="longueur" placeholder="10.450"></div>
            </div>
            <div id="ajout-capacite">Capacité : <input type="text" name="capacite" placeholder="123 456"></div>
            <strong>MEILLEUR TOUR :</strong>
            <div id="ajouter-best-lap">
                <div>Temps : <input type="text" name="tempslap" placeholder="min:sec.centiemes"></div>
                <div>Année : <input type="text" name="anneelap" placeholder="2023"></div>
            </div>
            <div id="ajout-photo">Photo : <input type="file" name="photo" required/></div>
            <div id="ajout-pilote">Pilote :
            <select name="numpilote">
                <?php
                $mabd = new PDO('mysql:host=localhost;dbname='';charset=UTF8;', '', '');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM circuits INNER JOIN pilotes ON circuits.pilote_id = pilotes.pilote_id";
                $resultat = $mabd->query($req);

                foreach ($resultat as $value) {
                echo '<option value="'.$value['pilote_id'].'">'.$value['pilote_nom'].'</option>';
                }
                ?>
            </select></div>
            <div id="submit"><input type="submit" name="ENVOYER"></div>
        </form>
    </div>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>
