<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Données - Application-Client-Serveur</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/mainv2.css">
    <link rel="stylesheet" href="assets/css/wireframe-theme.min.css">
    <script class="picturefill" async="async" src="assets/js/picturefill.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/img/XEFI.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="font-size: 12pt;">
<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Accéder aux</h4>
        <h1>Données</h1>
    </div>
</div>

<div class="min-h-screen bg-gray-100">
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
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            foreach ($data as $leClient){
                            ?>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;"><?php echo $leClient->ClientNom ?></td>
                                <td class="text-truncate" style="max-width: 200px;"><?php echo $leClient ->ClientPrenom ?></td>
                                <td class="text-truncate" style="max-width: 200px;"><?php echo $leClient ->ClientVille ?></td>
                            <?php } ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>

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
