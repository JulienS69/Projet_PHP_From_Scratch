<?php
include "Model.php";
class Client extends Model
{
    //region Attributs privés et Getter et Setter
    protected $id;
    protected $ClientNom;
    protected $ClientPrenom;
    protected $ClientRue;
    protected $clientCP;
    protected $ClientVille;
    //protected $fields = ['id', 'ClientNom', 'ClientPrenom', 'ClientRue', 'clientCP', 'ClientVille', 'ClienTelephone', 'ClientMail'];

    //endregion



//    function __toString($ClientNom, $ClientPrenom, $ClientRue, $clientCP, $ClientVille)
//    {
//        return "Votre nom est : " . $ClientNom .
//        "Votre prenom est : " .$ClientPrenom .
//        "Votre adresse est : " . $ClientRue .
//        "Votre code postale est : " . $clientCP .
//        "Votre Ville est : " . $ClientVille;
//    }


}

