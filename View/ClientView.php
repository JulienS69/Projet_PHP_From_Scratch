<body style="font-size: 10pt;">
<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Accéder aux</h4>
        <h1>Clients</h1>
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
                                <th>Modifier</th>
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
                                <td class="text-truncate" style="max-width: 200px; padding-left: 20px"><a class="btn" href="?route=addNewClient"><i class="fa fa-plus-circle"></i></a></td>
                                <td class="text-truncate"  style="max-width: 200px; padding-left: 45px"><a href="?route=delete&id=<?php echo $leClient->id ?>"><i class="coffeecup-icons-cross2" style="color: #0b0b0b"></i></a></td>
                                <td class="text-truncate"  style="max-width: 200px; padding-left: 35px"><a href="?route=updateCLient&id=<?php echo $leClient->id ?>"><i class="coffeecup-icons-pencil" style="color: #0b0b0b"></i></a></td>
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
