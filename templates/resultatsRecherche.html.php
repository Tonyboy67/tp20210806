<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats trouvés</title>
</head>
<body>
    <h1>Voici le(s) enregistrement(s) ramené(s) avec les informations de recherche ci-dessous</h1>
    <div>
        email : "<?php echo $email;  ?>" - cle n° 1 : "<?php echo $cle1; ?>" - clé n° 2 : "<?php echo $cle2 ;?>"  - 
        <?php if (isset($_POST["clegeneree"]) && strlen(trim($_POST["clegeneree"]))>=6){
            echo "clé générée : ".$clegeneree; 
        }
        
        ?> 
    </div>
    <div>
        <?php echo $information ?>
    </div>
</body>
<style>
    div{
        font-size: 1.3em;
    }
    .topsecret{
        margin-bottom: 10px;
        width: 60%;
    }
 
    div textarea {
        border: solid 2px;
        width: 55%;
        height: 150px;
         padding: 10px; 
        border: solid 2px;
        font-size: 1em;
    }

</style>
</html>