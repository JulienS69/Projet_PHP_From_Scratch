<?php
$app = new App();

    // Route permettant de rediriger vers la page d'accueil.

    $app->route("accueil", "AccueilController", "index");

    // Route permettant d'afficher la page répertoriant tous les clients.

    $app->route("home", "ClientController", "index");

    // Route permettant d'afficher la page d'ajout d'un nouveau client.

    $app->route("addNewClient", "ClientController", "showForm");

    // Route permettant d'ajouter un nouveau client'.

    $app->route("addClient", "ClientController", "add");

    // Route permettant d'afficher la page d'update du client.

    $app->route("updateCLient", "ClientController", "showFormUpdateClient");

    // Route permettant d'update un client

    $app->route("update", "ClientController", "update");


    // Route permettant de delete un client

    $app->route("delete", "ClientController", "deleteClient");

