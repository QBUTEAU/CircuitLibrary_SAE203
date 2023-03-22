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
    </section>

    <?php
    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire un nom</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['ville']) && !empty($_POST['ville'])) {
        $ville = $_POST['ville'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire la ville où se situe le circuit.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['pays']) && !empty($_POST['pays'])) {
        $pays = $_POST['pays'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire le pays dans lequelle le circuit se situe.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['ouverture']) && !empty($_POST['ouverture'])) {
        $ouverture = $_POST['ouverture'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire l'année d'ouverture du circuit.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['longueur']) && !empty($_POST['longueur'])) {
        $longueur = $_POST['longueur'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire la longueur du circuit.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['capacite']) && !empty($_POST['capacite'])) {
        $capacite = $_POST['capacite'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire combien de spectateurs le circuit peut accueillir.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['tempslap']) && !empty($_POST['tempslap'])) {
        $tempslap = $_POST['tempslap'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'inscrire le temps du meilleur tour.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    if (isset($_POST['anneelap']) && !empty($_POST['anneelap'])) {
        $anneelap = $_POST['anneelap'];
    } else {
        echo "<div class=phrase-resultat><p>Merci d'écrire l'année de réalisation du meilleur tour.</p>";
        echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
        die();
    }

    $pilote=$_POST['numpilote'];
    

    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', '12345');
    $mabd->query('SET NAMES utf8;');

	//vérification du format de l'image téléchargée
	$imageType=$_FILES["photo"]["type"];
	if ( ($imageType != "image/png") &&
		($imageType != "image/jpg") &&
		($imageType != "image/jpeg") ) {
			echo '<div class="phrase-resultat"><p>Désolé, le type d\'image n\'est pas reconnu !';
			echo 'Seuls les formats PNG et JPEG sont autorisés.</p></div>'."\n";
			die();
	}

	//creation d'un nouveau nom pour cette image téléchargée
	// pour éviter d'avoir 2 fichiers avec le même nom
	$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];


	// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
		if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
		"../images/upload/".$nouvelleImage)) {
			echo '<div class="phrase-resultat"><p>Problème avec la sauvegarde de l\'image, désolé...</p></div>'."\n";
			die();
		}
	} else {
		echo '<p>Problème : image non chargée...</p>'."\n";
		die();
	}

    $req = 'INSERT INTO circuits(circuit_nom,circuit_ville,circuit_pays,circuit_ouverture,circuit_longueur,circuit_capacite,circuit_tempslap,circuit_anneelap,circuit_photo,pilote_id) VALUES("'.$nom.'", "'.$ville.'", "'.$pays.'", '.$ouverture.', '.$longueur.', "'.$capacite.'","'.$tempslap.'", '.$anneelap.',"'.$nouvelleImage.'",'.$pilote.')';
    //$resultat = $mabd->query($req);
    echo '<div class="phrase-resultat"><p>Votre ajout concernant le circuit '.$nom.' a été fait avec succès !</p>';
    echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';
    $resultat = $mabd->query($req);
    ?>
    
    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>