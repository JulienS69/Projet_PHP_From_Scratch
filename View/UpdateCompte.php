<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Modifier le solde du</h4>
        <h1>Compte Client</h1>
    </div>
</div>
</body>
<div class="card-body">
    <form method="POST" action="?route=updateCompte&id=<?php echo $data->id ?>">
        <label for="">Solde : </label>
        <input type="text" name="solde" style="color: #0b0b0b" value="<?php echo $data->CompteSolde ?>">
        <input type="submit" style="font-weight: bold">
    </form>
</div>
</div>
<div style="padding-top: 180px"></div>
<?php
