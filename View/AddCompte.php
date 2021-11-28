<body style="font-size: 10pt;">
<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Création d'un</h4>
        <h1>Compte Client</h1>
    </div>
</div>
</body>
<div class="card-body">
    <form method="POST" action="?route=createCompte">
        <label for="">Numéro du compte : </label>
        <input type="number" name="numCompte" style="color: #0b0b0b; font-weight: bold"><br><br>
        <label for="">Solde du compte : </label>
        <input type="number" name="solde" style="color: #0b0b0b; font-weight: bold"><br><br>
        <label for="" >Numéro du Client : </label>
        <input type="number" name="numClient" placeholder="Le numéro du client correspond à l'id dans la base de données, celui-ci doit exister obligatoirement pour la création du compte"  style="color: #0b0b0b; height: 40px; width: 850px; font-weight: bold"><br><br></input>
        <input type="submit" style="font-weight: bold">
    </form>
</div>
</div>
<div style="padding-top: 180px"> </div>
