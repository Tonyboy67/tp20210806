<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données inserées en base</title>
</head>
<body>
    <?php include __DIR__.'./navbar.html.php'; ?>
    <h1>Veuillez retnir les informations relatives à l'insertion de cette donnée</h1>
    <h2>Celles-ci vous seront nécessaires pour retrouver vos données</h2>
    <div>
        Votre mail :  <?php  echo $email; ?><br />
        Votre première clé : <?php  echo $cle1; ?><br />
        Votre seconde clé : <?php  echo $cle2; ?><br />
        Votre clé générés propre au seul texte saisi ci-dessous: <?php  echo $info->clegeneree; ?><br />
        Votre texte top-secret : <br />
    </div>
    <div class="topsecret"> <?php  echo $info->data ?></div>
</body>
<style>
    div{
        font-size: 1.3em;
    }
    .topsecret{
        margin: 10px;
        padding: 10px; 
        width: 80%;
        border: solid 2px;
    }
</style>
</html>