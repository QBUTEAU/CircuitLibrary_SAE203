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
                <strong>AJOUTER UN PILOTE</strong>
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

    <div id="formulaire-pilotes">
        <form method="POST" action="table2_new_valide.php" enctype="multipart/form-data">
            <div class="infos-pilotes">ID : <input type="text" name="id" value="122"></div>
            <div class="infos-pilotes">Prénom : <input type="text" name="prenom" placeholder="Jacky"></div>
            <div class="infos-pilotes">Nom : <input type="text" name="nom" placeholder="Ickx"></div>
            <div class="infos-pilotes">Nationalité : <input type="text" name="nationalite" placeholder="BE"></div>
            <div id="submit-pilotes"><input type="submit" name="ENVOYER"></div>
        </form>
    </div>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>