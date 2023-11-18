<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adresses</title>
</head>
<body>
    <form action="result.php" method="post">
    <h1> Remplir les Adresses</h1>
        <?php 
        session_start();
            $iMax =$_POST["num_addresses"];

            //form which permit to save a new user in adress fonction
            for ($i = 1; $i <= $iMax; $i++):?>
            <fieldset>
            <legend><b>Adresse<b>  <?php echo $i; ?></legend>
            <label for="street">street:</label>
            <input type="text" name="street<?php echo$i?>">
            <label for="street_nb">Street Number:</label>
            <input type="number" name="street_nb<?php echo$i?>">
            <label for="type<?php echo$i?>">Type:</label>
            <select name="type<?php echo$i?>" id="type<?php echo$i?>">
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>
            <label for="city<?php echo$i?>">City:</label>
            <select name="city<?php echo$i?>">
                <option value="Montreal">Montreal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Quebec">Quebec</option>
            </select>
            <label for="zipcode<?php echo$i?>">zipcode:</label>
            <input type="text" name="zipcode<?php echo$i?>" id="zipcode<?php echo$i?>">
            </fieldset>
        <?php endfor;
        ?>
        <?php
           
        ?>
        <button type="submit">Soumetre</button>
    </form>
</body>
</html>