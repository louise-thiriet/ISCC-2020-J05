<?php print('<link rel="stylesheet" href="vitrine">'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
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
    <?php $navigation='vitrine-contacts';
        include('header.php');
    ?>
</header>
<body>
    <h2>Contact</h2>
    <div class="formulaire">
    <form action="/mon-formulaire" methode="post">
        <div>
            <input type="text" id="name" name="user_name" value="Votre nom"/>
        </div>
        <div>
            <input type="email" id="mail"name="user_mail" value="Votre mail"/>
        </div>
        <div>
            <textarea id="msg" name="user_message" rows="10" cols="33">Comment améliorer mon site web ?
            </textarea>

        </div>
        <div class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>
</body>
<?php include('footer.php'); ?>
</html>