<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adresses</title>
</head>
<body>
    <form action="connection.php" method="post">
    <h1> ADDRESSES</h1>
        <?php 
            $num_addresses = $_POST['num_addresses'];
            for ($i = 1; $i <= $num_addresses; $i++): ?>
            <fieldset>
            <legend><b>Adresse<b>  <?php echo $i; ?></legend>
            <label for="street">street:</label>
            <input type="text" name="street">
            <label for="street_nb">Street Number:</label>
            <input type="number" name="street_nb">
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>
            <label for="city">City:</label>
            <select name="city">
                <option value="Montreal">Montreal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Quebec">Quebec</option>
            </select>

            <label for="zipcode">zipcode:</label>
            <input type="text" name="zipcode">
            </fieldset>
        <?php endfor;?>
        <button type="submit">Soumetre</button>
    </form>
</body>
</html>
