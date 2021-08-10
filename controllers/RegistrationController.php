<?php
function index(){
    //echo 'Accès contrôleur d\'enregistrement OK';
    include __DIR__.'/../templates/insertion.html.php';
}

function save (){

    $defok=true;
    $defok &=isset($_POST["user-email"]);
    $defok &= isset($_POST["user-email-confirm"]);
    $defok &= isset($_POST["cle1-confirm"]);
    $defok &= isset($_POST["cle-2"]);
    $defok &= isset($_POST["cle2-confirm"]);
 

   //On réaffiche le formulaire d'inscription si au moins une des données ne sont pas saisies
   //ou si par exemple la méthode save etait appellée par erreur depuis un autre page
   if(!$defok){   
        index();
    }
    else{

        //echo 'Enregistrement de la souscription';
        //Définition des données du formulaire
        //suppression des espaces inutiles
        $email=trim($_POST["user-email"]);
        $email_confirm=trim($_POST["user-email-confirm"]);

        $cle1=trim($_POST["cle-1"]);
        $cle1_confirm=trim($_POST["cle1-confirm"]);

        $cle2=trim($_POST["cle-2"]);
        $cle2_confirm=trim($_POST["cle2-confirm"]);

        //$data=$_POST["data"];

        $messageErreur="";

        //On concatène les erreurs identifiées sous forme de liste ordonnée,
        //puis on l'affiche s'il y en a.
        /*if(!=){
            
        }*/

        //Confirmations des valeurs
        if($email!=$email_confirm){
            //echo 'Erreur sur l\'email'; die();
            $messageErreur.='<li>L\'email  "'.$email.'" est différent de celui de confirmation'.$email_confirm.'</li><br />';
        }else{
        
            include __DIR__.'/../tools/commonTools.php';
            if(!isMailOk($email)){
                $messageErreur.='<li>L\'email  "'.$email.'" est mal orthographié. Veuillez le corriger</li><br />';
            }
        }

        if($cle1!=$cle1_confirm){
            //echo 'Erreur sur la clé 1'; die();
            $messageErreur.='<li>La première clé : "'. $cle1.'" et celle de confirmation : "'.$cle1_confirm.'" sont différentes</li><br />';
        }
        else if(strlen($cle1)<6){
            $messageErreur.='<li>La taille de la première  clé : "'. $cle1.'" est trop courte - 6 caractères minimum requis</li><br />';
        }

        if($cle2!=$cle2_confirm){
            //echo 'Erreur sur la clé 2'; die();
            $messageErreur.='<li>La seconde clé : "'. $cle2.'" et celle de confirmation : "'.$cle2_confirm.'" sont différentes</li><br />';
        }
        else if(strlen($cle2)<6){
            $messageErreur.='<li>La taille de la seconde clé : "'. $cle2.'est trop courte - 6 caractères minimum requis</li><br />';
        }
        //Obligation d'introduire des clés différentes
        if($cle1==$cle2){
            //echo 'Erreur sur égalité entre clés'; die();
            $messageErreur.='<li>La première clé : "'.$cle1.'" et la seconde : "'.$cle2.'" doivent être différentes</li><br />';
        }
    
        if(strlen($messageErreur)>0){
            $erreur='<ol>'.$messageErreur.'</ol>';
            include __DIR__.'/../templates/error.html.php';
        }
        else {
            //Insertion des données en base

            $randsize=8;
            include __DIR__.'/../entities/Information.php';
            $info=new Information();
            $info->email=$email;
            $info->cle1=$cle1;
            $info->cle2=$cle2;
            $info->clegeneree=substr(str_shuffle('&{[(-|_\@)])}$!§;.,?<>#&~£%*0123456789abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$randsize);
            if(isset($_POST["data"]))
                $info->data=$_POST["data"];
            else $info->data="";
            $info->save();
            include __DIR__.'/../templates/resultatInsertion.html.php';
        }
    }

}