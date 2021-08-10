<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enregistrement </title>
    </head>

    <body>
        <?php include __DIR__.'/navbar.html.php'; ?>
        <div>
        <p>Veuillez introduire les informations en respectant les conditions suivantes, faute de quoi il vous faudra tout recommencer (notre système ne retient pas vos informations de connexion et ne pose aucun cookie) : <br/></p>
                <ul>
                    <li>L'e-mail doit être un email valide</li>
                    <ii>Les mots de passe 1 et 2 (au moins 8 caractères)</li>
                    <li>Les données saisies le sont définitivement. Vous ne pourrez plus les modifier</li>
                    <li>Un troisième mot de passe vous sera transmis pour les requêtes ultérieures, pour l'accès à la donnée inserée. Si vous le perdez, vous n'accèderez jamais plus à l'information textuelle associée.
                    </li>
                </ui>

                <p>
                    Une fois que le votre inscription sera acceptée, un troisième mot de passe vous sera fourni qu'il vous incombe de retenir. Si vous oubliez au moins un des mdp, la connexion au système sera interdite et à vos données perdues.
                </p> 
        </div>

        <form action="/register/save" method="POST">
            <div>
                <input type="text" placeholder="Votre adresse mail" name = "user-email" required>
            <!--</div>

            <div>-->
                <input type="text" placeholder="Confirmez votre mail" name = "user-email-confirm" required>
            </div>

            <div>
                <input type="password" placeholder="Première clé" name = "cle-1" required>
            <!--</div>

            <div>-->
                <input type="password" placeholder="Confirmez la 1ère clé" name = "cle1-confirm" required>
            </div>

            <div>
                <input type="password" placeholder="Seconde clé" name = "cle-2" required>
            <!--</div>

            <div>-->
                <input type="password" placeholder="Confirmez la seconde clé" name = "cle2-confirm" required>
            </div>

            <div>
                <label>Veuillez inserrer ci-dessous votre texte à protéger</label><br />
                <textarea placeholder="Vos données secrètes" name = "data" ></textarea>
            </div>
            <button type="submit">Insérer en base</button>
            <button type="reset">Réinitialiser</button>
        </form>

    </body>
    <style>

        form div input{
            margin: 3px;
            width: 250px;
        }
     
        form div textarea {
            border: solid 2px;
            width: 60%;
            height: 300px;
            margin:  10px;
            padding: 10px; 
            border: solid 2px;
        }


        /*div, p, li, input, button{
        font-size: 1.2em;
    }*/
    .topsecret{
        margin-bottom: 10px;
        width: 60%;
    }
 
    div textarea {
        border: solid 2px;
        width: 75%;
        height: 175px;
         padding: 10px; 
        border: solid 2px;
        font-size: 1em;
        resize: none;
    }
    div, ul,  button{
        font-size: 1.3em;
        font-weight: bolder;
        margin-bottom: 5px;
    }
    p, input, label {
        font-size: 1.1em;
        font-weight: bolder;
        margin-bottom: 5px;
    }

    </style>
</html>

