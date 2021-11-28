<?php

class CompteController extends Controller {

//    function index(){
////        Créer des variables(compact) permettant de manipuler les données dans la vue.
//        include_once "View/header.php";
//        include_once "View/Vehicule.php";
//        include_once "View/footer.php";
//    }

    public function index() {
        $comptes=(new Compte)->all2();
        $this->view("CompteView", $comptes);
    }

    public function showCreateCompteView(){
        $this->view("AddCompte");
    }

    public function showFormUpdateCompteView(){
        $compte = Compte::find($_GET["id"]);
        $this->view("UpdateCompte", $compte);
    }

    public function delete(){
        $compte = Compte::find($_GET["id"]);
        Compte::delete($compte->id);
        $this->view("AccueilView");
    }

    public function create() {
        Compte::create([
            "CompteNum" => $_POST["numCompte"],
            "CompteSolde" => $_POST["solde"],
            "ClientId"=> $_POST["numClient"]
        ]);
        $this->view("AccueilView");
    }

    public function updateCompte(){
        $compte = Compte::find($_GET["id"]);
        Compte::update($compte->id, [
            "CompteSolde" => $_POST["solde"]
        ]);
        $this->view("AccueilView");
    }


}
