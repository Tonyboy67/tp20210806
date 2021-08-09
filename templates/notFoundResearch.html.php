<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrements non trouvés</title>
</head>
<body>
    <h1>Aucun enregistrement n'a été ramené avec les informations de recherche ci-dessous</h1>
    <div>
        email : "<?php echo $email;  ?>" - cle n° 1 : "<?php echo $cle1; ?>" - clé n° 2 : "<?php echo $cle2 ;?>"  - 
        <?php if (isset($_POST["clegeneree"]) && strlen(trim($_POST["clegeneree"]))>=6){
            echo "clé générée : ".$clegeneree; 
        }
        
        ?> 
    </div>
</body>
</html>