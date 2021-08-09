<?php

//On teste l'email selon les critères : 
// - présence de @
// - positionnement du dernier point au moins à deux emplacements avant la fin
// - positionnement du @ à une distance d'au moins deux emplacements du dernier point
// - présence de un seul symbole "@" dans la chaîne.
// ... et on aurait pu en trouver d'autres...
function isMailOk(string $mail):bool{
    $taille=strlen($mail);
    $posAt=strpos($mail, "@");
    $nombreAt=substr_count($mail, "@");
    $dernierPoint=strripos($mail, ".");

    if($nombreAt==1 && ($posAt>=2) && ($dernierPoint-$posAt)>=2 && ($taille-$dernierPoint)>=3)
        return true;
    return false;
}