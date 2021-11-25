<?php
$app = new App();

    // Route permettant de rediriger vers la page d'accueil.

    $app->route("accueil", "AccueilController", "index");

    // Route permettant d'afficher la page répertoriant tous les clients.

    $app->route("home", "ClientController", "index");

    // Route permettant d'afficher la page d'ajout d'un nouveau client.

    $app->route("addNewClient", "ClientController", "showForm");

    $app->route("addClient", "ClientController", "add");
