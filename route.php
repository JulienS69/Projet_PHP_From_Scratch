<?php
$app = new App();

    $app->route("accueil", "AccueilController", "index");

    $app->route("home", "ClientController", "index");

//$app->route("addClient", "ClientController")
