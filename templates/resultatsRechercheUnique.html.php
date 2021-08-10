<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats trouvés</title>
</head>
<body>
    s<?php include __DIR__.'./navbar.html.php'; ?>
    <h1>Voici le(s) enregistrement(s) ramené(s) avec les informations de recherche ci-dessous</h1>
    
    <div>
        email : "<?php echo $info->email; ?>" - cle n° 1 : "<?php echo $info->cle1; ?>" - clé n° 2 : "<?php echo $info->cle2 ;?>" 
         - clé générée : "<?php echo $info->clegeneree;?>" 
    </div>

    
        <form action="/update" method= "POST">
            <!-- Champs hidden pour éviter que l'utilisateur ne touche à des données
            qui sont correctement saisier et déjà contrôlées-->
            <input type="text" name="id" value="<?php echo $info->id?>" hidden>
            <div><textarea name="data"><?php echo $info->data; ?></textarea></div>
            <button type="submit">Mettre à jour</button>
        </form>



</body>
<style>
    form{
        width: 80%;
    }
    div{
        font-size: 1.3em;
        width: 100%;
        margin-bottom: 5px;;
    }
    .topsecret{
        margin-bottom: 10px;
        width: 60%;
    }

    button{
        font-size: 1.3em;
        width: 220px;
        font-weight: bold;
        border: solid 2px;
        
    }


    div textarea {
        border: solid 2px;
        width: 95%;
        height: 175px;
        padding: 10px; 
        border: solid 2px;
        font-size: 1.3em;
        resize: none;
    }
 

</style>
</html>