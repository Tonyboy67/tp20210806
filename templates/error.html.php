<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreurs d'inscription à corriger</title>
</head>
<body>
    <?php include __DIR__.'/navbar.html.php'; ?>
    <h1>Les erreurs suivantes ont été identifiées. Veuillez les corriger : </h1>
    <p>
        <?php echo $erreur;?>
    </p>
</body>
    <style>
        p{
            font-size: 1.3em;
        }
    </style>
</html>

