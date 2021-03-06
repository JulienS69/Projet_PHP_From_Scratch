<?php

class ClientController extends Controller {

//    function index(){
////        Créer des variables(compact) permettant de manipuler les données dans la vue.
//        include_once "View/header.php";
//        include_once "View/Vehicule.php";
//        include_once "View/footer.php";
//    }

      public function index() {
            $clients=(new Client)->all();
            $this->view("ClientView", $clients);

        }

    public function add() {
        Client::create([
            "ClientNom" => $_POST["nom"],
            "ClientPrenom" => $_POST["prenom"],
            "ClientRue"=> $_POST["street"],
            "clientCP"=> $_POST["cp"],
            "ClientVille"=> $_POST["city"],
            "ClientTelephone"=> $_POST["tel"],
            "ClientMail"=> $_POST["mail"]
        ]);
        $clients=(new Client)->all();
        $this->view("ClientView", $clients);
    }

    public function deleteClient(){
        $client = Client::find($_GET["id"]);
        Client::delete($client->id);
        $this->view("AccueilView");
    }


    public function showForm(){
          $this->view("AddClient");
    }

    public function showFormUpdateClient(){
        $client = Client::find($_GET["id"]);
        $this->view("UpdateClient", $client);
    }



    public function update(){
        $client = Client::find($_GET["id"]);
        Client::update($client->id, [
            "ClientNom" => $_POST["nom"],
            "ClientPrenom" => $_POST["prenom"],
            "ClientRue"=> $_POST["street"],
            "clientCP"=> $_POST["cp"],
            "ClientVille"=> $_POST["city"],
            "ClientTelephone"=> $_POST["tel"],
            "ClientMail"=> $_POST["mail"]
        ]);
        $this->view("AccueilView");
    }



}
