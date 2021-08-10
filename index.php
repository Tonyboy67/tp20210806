<?php

$path=$_SERVER['PATH_INFO'];
//var_dump($path);
//echo $path;

if($path === '/register'){
    //On affiche simplement le formulaire s'insertion
    include __DIR__.'./controllers/RegistrationController.php';
    index();
}
else if($path === '/register/save'){
    //Action de sauvegarde invoquée de puis le formulaire (submit)
    include __DIR__.'./controllers/RegistrationController.php';
    save();
}else if($path === '/request'){
    //Accès aux données (page de requête)
    //include __DIR__.'/templates/request.html.php';
    include __DIR__.'/controllers/RequestInsertionsController.php';
    index();
}
else if($path === '/request/execute'){
    //Accès aux données (page de requête)
    //include __DIR__.'/templates/request.html.php';
    include __DIR__.'/controllers/RequestInsertionsController.php';
    execute();
}
else if($path === '/update'){
    //Accès aux données (page de requête)
    //include __DIR__.'/templates/request.html.php';
    include __DIR__.'/controllers/RequestInsertionsController.php';
    update();
}
else{
    include __DIR__.'./controllers/NotFoundController.php';
    index();
}

/*
/*else if($path==""){
    include __DIR__.'/../src/';
}
else if($path==""){
    include __DIR__.'/../src/';
}
else if($path==""){
    include __DIR__.'/../src/';
}
*/