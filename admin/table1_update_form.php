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
                <strong>MODIFICATION DU CIRCUIT :</strong>
                <?php
                $modifCircuit = $_GET['num'];
                $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', '%Messi2004');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM circuits WHERE circuit_id = $modifCircuit";
                $resultat = $mabd->query($req);
                $circuit = $resultat->fetch();
                echo '<p>'.$circuit['circuit_nom'].' | n°'.$circuit['circuit_id'].'</p>';
                ?>
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
        <form method="POST" action="table1_update_valide.php" enctype="multipart/form-data">
            <div id="id">ID : <input type="text" name="num" value="<?php echo $circuit['circuit_id']; ?>"></div>
            <div>Nom du circuit : <input type="text" name="nom" value="<?php echo $circuit['circuit_nom'];?>"></div>
            <div id="ajouter-ville-pays">
                <div>Ville : <input type="text" name="ville" value="<?php echo $circuit['circuit_ville'];?>"></div>
                <div>Pays : <input type="text" name="pays" value="<?php echo $circuit['circuit_pays'];?>"></div>
            </div>
            <div id="open-length">
                <div>Ouverture : <input type="text" name="ouverture" value="<?php echo $circuit['circuit_ouverture'];?>"></div>
                <div>Longueur : <input type="text" name="longueur" value="<?php echo $circuit['circuit_longueur'];?>"></div>
            </div>
            <div id="ajout-capacite">Capacité : <input type="text" name="capacite" value="<?php echo $circuit['circuit_capacite'];?>"></div>
            <strong>MEILLEUR TOUR :</strong>
            <div id="ajouter-best-lap">
                <div>Temps : <input type="text" name="tempslap" value="<?php echo $circuit['circuit_tempslap'];?>"></div>
                <div>Année : <input type="text" name="anneelap" value="<?php echo $circuit['circuit_anneelap'];?>"></div>
            </div>
            <div id="ajout-photo">Photo : <input type="file" name="photo"/></div>
            <div id="ajout-pilote">Pilote :
            <select name="numpilote">
                <?php
                $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', '%Messi2004');
                $mabd->query('SET NAMES utf8;');
                $req = "SELECT * FROM circuits INNER JOIN pilotes ON circuits.pilote_id = pilotes.pilote_id";
                $resultat = $mabd->query($req);

                foreach ($resultat as $value) {
                    $selection="";
                    if($circuit['pilote_id'] == $value['pilote_id']) $selection="selected";          
                    echo '<option '.$selection . ' value="' .  $value['pilote_id'] . '"> ' .  $value['pilote_nom'] . '</option>';
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