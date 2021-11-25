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

        $this->view("AddClient");

    }


}
