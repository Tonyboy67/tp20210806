
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche en base</title>
</head>
<body>
    <?php include __DIR__.'/navbar.html.php'; ?>
    <h1>Formulaire de recherche - préparez votre mail et vos clés</h1>
    <p>
        <h2>Attention !</h2>
        <ul>
            <li> Les deux clés que vous aurez entré vous permettront de récupérer toutes les informations que vous avez inséré en utilisant ces deux clés</li>
            <li>Si en plus vous entrez également la clé générée lors de l'insertion d'une des données, alors vous aurez accès uniquement à cette seule donnée, mais en plus vous pourrez la modifier (update).</li>
        </ul>
    </p> 
    <form action="/request/execute" method="POST">
            <div>
                <input type="text" placeholder="Votre adresse mail" name = "user-email" required>
            </div>

            <div>
                <input type="password" placeholder="Première clé" name = "cle-1" required>
                <input type="password" placeholder="Seconde clé" name = "cle-2" required>
           </div>

            <div  >
                <input class="clegeneree" type="password" placeholder="Clé générée lors d'un enregistrement" name = "clegeneree" >
            </div>
             <button type="submit">Lancer la recherche</button>
            <button type="reset">Réinitialiser</button>
        </form>

</body>
    <style>
        form{
            border: solid 2px;
            width: 60%;
        }
        form div input{
            margin: 3px;
            width: 350px;
        }
        p{
            font-size: 1.3em;
        }

        div input{
            font-size: 1.3em;
        }

        ul{
            font-size: 1.3em;
        }
        .clegeneree{
            width: 500px;
        }
    </style>
</html>