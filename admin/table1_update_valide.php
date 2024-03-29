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
                <strong>MODIFICATION D'UN CIRCUIT</strong>
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
    $modifCircuit=$_POST['num'];

    $mabd = new PDO('mysql:host=localhost;dbname='';charset=UTF8;', '', '');
    $mabd->query('SET NAMES utf8;');

    $imageName=$_FILES["photo"]["name"];
    if($imageName!=""){

			//vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
    		//creation d'un nouveau nom pour cette image téléchargée
            // pour éviter d'avoir 2 fichiers avec le même nom
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	

    		// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	            "../images/upload/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }

    $req = "UPDATE circuits SET circuit_nom='$nom', circuit_ville='$ville', circuit_pays='$pays', circuit_ouverture=$ouverture, circuit_longueur=$longueur, circuit_capacite='$capacite', circuit_tempslap='$tempslap', circuit_anneelap=$anneelap, circuit_photo='$nouvelleImage', pilote_id=$pilote WHERE circuit_id=$modifCircuit";}
    else{
        $req = "UPDATE circuits SET circuit_nom='$nom', circuit_ville='$ville', circuit_pays='$pays', circuit_ouverture=$ouverture, circuit_longueur=$longueur, circuit_capacite='$capacite', circuit_tempslap='$tempslap', circuit_anneelap=$anneelap, pilote_id=$pilote WHERE circuit_id=$modifCircuit";
         }

    echo '<div class="phrase-resultat"><p>Votre modification concernant le circuit n°'.$modifCircuit.' a été fait avec succès !</p>';
    echo '<div id="bouton-retour-accueil"><form action="table1_gestion.php"><button style=text-transform:uppercase>Revenir au tableau</button></form></div></div>';

    $resultat = $mabd->query($req);

    ?>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>
