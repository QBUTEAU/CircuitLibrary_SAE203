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
                <strong>SUPPRESSION D'UN PILOTE</strong>
            </div>
        </div>
        <?php
        // recupérer dans l'url l'id de l'album à supprimer
        $suppPilote=$_GET['num'];

        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', '%Messi2004');
        $mabd->query('SET NAMES utf8;');

        // tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
        $req = "DELETE FROM pilotes WHERE pilote_id = $suppPilote";

        // cette ligne sert juste pour le debug. à supprimer quand tout marche correctement 
    
        $mabd->query($req);

        echo "<div class=phrase-resultat><p>Vous venez de supprimer le pilote numéro $suppPilote.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table2_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        ?>
        </section>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>