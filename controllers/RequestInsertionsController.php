<?php

function index(){
    include __DIR__.'/../templates/request.html.php';
}

function execute(){
    //On ajoute le formulaire de recherche
    
    include __DIR__.'/../templates/request.html.php';

    //auquel on concatène celui de présentation des données ramenées depuis la base :
    //Soit celui portant sur une seule donnée en particulier (s'il introduit aussi la clé générée spécifiquement pour cette donnée),
    //  avec possibilité de la modifier (update)
    //Soit tous ceux sauvegardés avec les deux premières clés, mais en consultation seule.
  
  
    //Les valeurs saisies :
    $error="";
    $cle1="";
    $cle2="";
    $clegeneree="";
    $email="";

    //Comme pour l'insertion des données, on contrôle les valeurs pour voir si les
    // saisies ont été correctement faites. Sinon, comme pour l'insertion, on concatène
    // les erreurs sous forme de liste ordonnée et on l'affiche
    /*-------------------------------------------------------------------------------*/
    if (isset($_POST["user-email"]) && strlen(trim($_POST["user-email"]))>=8) {
        $email=trim($_POST["user-email"]);
        include __DIR__.'/../tools/commonTools.php'; //Utilisation des la fonction de contrôle de l'e-mail
        if (!isMailOk($email)) {
            $error.='<li>L\'Votre e-mail : "'.$email.'" est mal orthographié. Veuillez le corriger</li><br />';
        }
    }

    if (isset($_POST["cle-1"]) && strlen(trim($_POST["cle-1"]))>=6) {
        $cle1=trim($_POST["cle-1"]);
    } else {
        $error.='<li>La taille de la première  clé : "'. $cle1.'" est trop courte - 6 caractères minimum requis</li><br />';
    }

    if (isset($_POST["cle-2"]) && strlen(trim($_POST["cle-2"]))>=6) {
        $cle2=trim($_POST["cle-2"]);
    } else {
        $error.='<li>La taille de la seconde  clé : "'. $cle2.'" est trop courte - 6 caractères minimum requis</li><br />';
    }
    /* Deux cas :
    //soit il y a des erreurs, et on affiche la page d'erreur*/
    /*-------------------------------------------------------------------------------*/
    if (strlen(trim($error))>0) {
        $erreur="<ol>".$error."</ol>";
    
        //Affichage des erreurs de saisie sous forme de liste
        //On affich exactement la même page que pour l'insertion,
        //puisque le nom de la chaîne d'erreur "$erreur" est la même
        //include __DIR__.'';
        include __DIR__.'/../templates/error.html.php';
    } else {
        //Pas d'erreur et on fait la recherche en base

        include __DIR__.'/../entities/Information.php';

        //On ramène d'avord tout le contenu de la table
        //qu'on parcourt façon bourrin, au lieu de filtrer cête SGBD

        $informations=Information::all();
        $information=null;
        // Sinon, traitement et présentation des données
        if (isset($_POST["clegeneree"]) && strlen(trim($_POST["clegeneree"]))>=6) {
            $clegeneree=trim($_POST["clegeneree"]);
            //Présentation de la donnée (texte) inserée avec la double clé + la clé générée qu'on a fourni ici
            $info=null;
            foreach ($informations as $inf) {
                if ($inf->email===$email && $inf->cle1=== $cle1 && $inf->cle2===$cle2 && $inf->clegeneree=== $clegeneree) {
                    //On initialise $information et on l'affiche
                    $info=$inf;
                    //On peut sortir sans trop de souci, car la
                    //clé générée de façon alé atoire a de fortes
                    //chances d'être unique
                    break;
                }
            }
            //Enregistrement trouvé
            if (!is_null($info)) {
                //Un enregistrement trouvé, et surement, le seul
                //Affichage du contenu...
                $information='<div><textarea>'.$info->data.'</textarea></div>';
                include __DIR__.'/../templates/resultatsRecherche.html.php';

            } else {
                //Page indiquant que l'enregistrement n'a pas été trouvé
                //avec le mail et les clés de recherches introduites
                include __DIR__.'/../templates/notFoundResearch.html.php';
            }
        } else {
            //Présentation sous forme de liste des données saisies avec la double clé
            //Puisqu'ici la recherche n'a pas été faite avec le clé générée aléatoirement

            $information="";//On initialise $information et on l'affiche
            foreach ($informations as $inf) {
                if ($inf->email===$email && $inf->cle1=== $cle1 && $inf->cle2===$cle2) {

                    //Dans ce cas on concatène l'ensemble des textes représentant 
                    //les informations saisies, qu'on présente à la suite chacun dans
                    // une "textarea" elle-même incluse dans une "div".   
                    $information.='<div class="topsecret"><textarea>'.$inf->data.'</textarea></div>';
                }
            }
            //Et c'est ici qu'on réceptionne et afiche les résultats
            //ainsi concaténés.
            include __DIR__.'/../templates/resultatsRecherche.html.php';
        }
    }
}