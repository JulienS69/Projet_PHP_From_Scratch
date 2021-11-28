<body style="font-size: 10pt;">
<div class="row wecome-row" style="padding-top: 10px; padding-bottom: 20px">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Modifier la fiche du</h4>
        <h1>Client</h1>
    </div>
</div>
</body>
<div class="card-body">
    <form method="POST" action="?route=update&id=<?php echo $data->id ?>">
        <label for="">Nom : </label>
        <input type="text" name="nom" style="color: #0b0b0b" value="<?php echo $data->ClientNom ?>">
        <label for="" >Prénom : </label>
        <input type="text" name="prenom" style="color: #0b0b0b" value="<?php echo $data->ClientPrenom ?>"><br><br>
        <label for="">Rue : </label>
        <input type="text" name="street" style="color: #0b0b0b" value="<?php echo $data->ClientRue ?>"><br><br>
        <label for="">Code Postal : </label>
        <input type="text" name="cp" style="color: #0b0b0b" value="<?php echo $data->clientCP ?>"><br><br>
        <label for="">Ville :</label>
        <input type="text" name="city" style="color: #0b0b0b" value="<?php echo $data->ClientVille ?>"><br><br>
        <label for="">Téléphone :</label>
        <input type="text" name="tel" style="color: #0b0b0b" value="<?php echo $data->ClientTelephone ?>"><br><br>
        <label for="">Adresse Mail :</label>
        <input type="text" name="mail" style="color: #0b0b0b" value="<?php echo $data->ClientMail ?>"><br><br>
        <input type="submit" style="font-weight: bold">
    </form>
</div>
</div>
<div style="padding-top: 180px"> </div>
<?php
