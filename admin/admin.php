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

    <section id="section-admin">
        <div id="accueil">
            <div id="titre-texte">
                <strong>ADMINISTRATION</strong>
            </div>
        </div>
        <div id="div-global-admin">
            <div>
                <form action="/"><button>RETOUR</button></form>
            </div>
            <div>
                <form action="table1_gestion.php"><button>GESTION DES CIRCUITS</button></form>
            </div>
            <div>
                <form action="table2_gestion.php"><button>GESTION DES PILOTES</button></form>
            </div>
        </div>
    </section>

    <?php
        require ("../partials/footer.php");
    ?>
</body>
</html>