<?php print('<link rel="stylesheet" href="vitrine">'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style type="text/css">
    a:link
    {
    text-decoration:none;
    }
    </style>
</head>
<header>
<?php $navigation='vitrine-accueil';
    include('header.php');
?>
</header>
<body>

    <h2>Accueil</h2>
    <p>
        Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ? Pour mieux comprendre cette révolution, venez apprendre les rudiments du 
        code et découvrir les bases de la programmation des sites internet. Destiné aux étudiants, ce code camp vous initiera en un mois aux principaux 
        langages de programmation Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou Paypal et vous éclaira sur la sécurité des sites internet.
    </p>
    <img src="http://localhost/ISCC/J04/assetD04/accueil1.jpg" width="350" height="200"/>
    <img src="http://localhost/ISCC/J04/assetD04/accueil2.jpg"width="350" height="200"/>
</body>
    <?php include('footer.php'); ?>
</html>