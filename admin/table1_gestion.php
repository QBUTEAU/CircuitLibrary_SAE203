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
                <strong>GESTION DES CIRCUITS</strong>
            </div>
        </div>
        <div id="boutons-retour-ajouter">
            <div id="bouton-retour-accueil">
                <form action="../index.php"><button style=text-transform:uppercase>Retour à l'accueil</button></form>
            </div>
            <div id="bouton-envoi-ajout">
                <form action="table1_new_form.php"><button>AJOUTER UN CIRCUIT</button></form>
            </div>
        </div>
    </section>

    <table>
	<thead>
		<tr><td style=text-transform:uppercase>Nom du circuit</td>
        <td class="none-tableau" style=text-transform:uppercase>Lieu du circuit</td>
        <td class="none-tableau" style=text-transform:uppercase>Ouverture</td>
        <td class="none-tableau" style=text-transform:uppercase>Longueur</td>
        <td class="none-tableau" style=text-transform:uppercase>Capacité</td>
        <td class="none-tableau" style=text-transform:uppercase>Année du meilleur tour</td>
        <td class="none-tableau" style=text-transform:uppercase>Temps du meilleur tour</td>
        <td>SUPPRIMER</td><td>MODIFIER</td></tr>
	</thead>
	<tbody>
    <?php
    $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', '', '');
    $mabd->query('SET NAMES utf8;');
    $req = "SELECT * FROM circuits";
    $resultat = $mabd->query($req);

    foreach ($resultat as $value) {
        echo '<tr>';
        echo '<td>'.$value['circuit_nom'] . '</td>';
        echo '<td class="none-tableau">'.$value['circuit_ville'].', '.$value['circuit_pays'].'</td>';
        echo '<td class="none-tableau">'.$value['circuit_ouverture'].'</td>';
        echo '<td class="none-tableau">'.$value['circuit_longueur'].' km</td>';
        echo '<td class="none-tableau">'.$value['circuit_capacite'].'</td>';
        echo '<td class="none-tableau">'.$value['circuit_anneelap'].'</td>';
        echo '<td class="none-tableau">'.$value['circuit_tempslap'].'</td>';
        echo '<td> <a href="table1_delete.php?num='.$value['circuit_id'].'">SUPPRIMER</a> </td>';
        echo '<td> <a href="table1_update_form.php?num='.$value['circuit_id'].'">MODIFIER</a> </td>';
        echo '</tr>';
    }
    ?>

</tbody>
</table>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>
