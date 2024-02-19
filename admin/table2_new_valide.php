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
    </section>

    <?php
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire le prénom.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table2_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire le nom.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table2_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['nationalite']) && !empty($_POST['nationalite'])) {
        $nationalite = $_POST['nationalite'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'indiquer la nationalité.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table2_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }    

    $piloteID=$_POST['id'];

    $mabd = new PDO('mysql:host=localhost;dbname=;charset=UTF8;', '', '');
    $mabd->query('SET NAMES utf8;');

    $req = 'INSERT INTO pilotes(pilote_id,pilote_prenom,pilote_nom,pilote_nationalite) VALUES('.$piloteID.',"'.$prenom.'", "'.$nom.'", "'.$nationalite.'")';
    //$resultat = $mabd->query($req);
    echo '<div class="phrase-resultat"><p>Le pilote '.$prenom.' '.$nom.' a été ajouté avec succès !</p>';
    echo '<div id="bouton-retour-accueil"><form action="table2_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
    $resultat = $mabd->query($req);
    ?>
    
    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>
