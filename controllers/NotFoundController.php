<?php

function index(){

    include __DIR__.'/../templates/navbar.html.php';
    echo '<h1>Cher compagnon, vous êtes dans le décor</h1>';
 
    echo '<h2> Veuillez vous rendre sur une des pages ci-dessus</h2>';


    //include __DIR__.'/../../templates/navbar.html.php';
    /*
     echo '
    <style>
        ui{
            font-size: 1.3em;
        }
    </style>
    <div>
        <ui>
            <li><a href="/login">Se connecter</a><br/></li>
            <li><a href="/register">S\'inscrire</a><br/></li>
        </ui>
    </div>';
    */

}