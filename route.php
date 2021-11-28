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


    // Route permettant d'afficher la vue des comptes des clients

    $app->route("viewCompte", "CompteController", "index");

    // Route permettant d'afficher la vue de création de compte client

    $app->route("createCompteView", "CompteController", "showCreateCompteView");

    // Route permettant la création de compte client.

    $app->route("createCompte", "CompteController", "create");

    // Route permettant de supprimer le compte d'un client

    $app->route("deleteCompte", "CompteController", "delete");

    // Route permettant d'afficher la vue d'update pour le solde d'un compte client.

    $app->route("updateSolde", "CompteController", "showFormUpdateCompteView");

    // Route permettant d'update le solde du compte client

    $app->route("updateCompte", "CompteController", "updateCompte");


