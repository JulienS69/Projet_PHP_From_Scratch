<body style="font-size: 10pt;">
<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Accéder aux</h4>
        <h1>Données</h1>
    </div>
</div>
<div class="min-h-screen bg-gray-100" style="padding-top: 50px; padding-bottom: 50px">
    <div class="row justify-content-center" style="padding-top: 25px">
        <div class="col-xl-10 col-xxl-9">
            <div class="card shadow">
                <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                    <h5 class="display-6 text-nowrap mb-0" style="font-weight: bold">Tous les clients</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nom du Client</th>
                                <th>Prénom du Client</th>
                                <th>Ville du client</th>
                                <th>Ajouter</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $leClient){
                            ?>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px; padding-left: 20px"><?php echo $leClient->ClientNom ?></td>
                                <td class="text-truncate" style="max-width: 200px;  padding-left: 20px"><?php echo $leClient ->ClientPrenom ?></td>
                                <td class="text-truncate" style="max-width: 200px; padding-left: 20px"><?php echo $leClient ->ClientVille ?></td>
                                <form action="" method="post">
                                <td class="text-truncate"  style="max-width: 200px; padding-left: 20px"><button type="submit"><i class="fa fa-plus-square"></i></button></td>
                                </form>
                                <form action="" method="post">
                                    <td class="text-truncate"  style="max-width: 200px; padding-left: 35px"><button type="submit"><i class="fa fa-minus-square"></i></button></td>
                                </form>
                            <?php } ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php
//    include("Client.php");
//    $client = new Client();
//    $result = $client->all();

    //$db = new PDO('mysql:host=localhost:3306;dbname=creditsiov2;charset=utf8','root', '');
    //$rs = $db->prepare("SELECT * FROM Client");
    //$rs->execute();

    //$rsv = $db->prepare("SELECT * FROM Mois WHERE NumMois=:1");
    //$rsv ->bindValue(":NumMois", 1);;
    //$rsv->execute()
    //var_dump($result);

    //$client1 = new Client();
    //$client1->find(1);
    //$client1 ->ClientNom="testtttttttttt";
    //$client1 ->save();
//
//    foreach ($data as $leClient){
//        ?>
<!--        <client>-->
<!--            <div style="padding-left: 25px; padding-top: 10px">-->
<!--                <h2 class="badge" style="font-family: 'Arial Black'">--><?php //echo $leClient->ClientNom ?><!--</h2>-->
<!--                <p>--><?php //echo $leClient ->ClientPrenom ?><!--</p>-->
<!--                <p>--><?php //echo $leClient->ClientRue ?><!--</p>-->
<!--                <p>--><?php //echo $leClient->clientCP ?><!--</p>-->
<!--                <p>--><?php //echo $leClient->ClientVille ?><!--</p>-->
<!--            </div>-->
<!--        </client>-->
<!--    --><?php //} ?>
<!--</div>-->
