<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_data = $_post[($street = $_POST['street'],
    $street_nb= $_POST['street_nb'],
    $type = $_POST['type'],
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'])];
     
    // Insert data into the database
    $sql =("INSERT INTO adress(street, street_nb, type, city,zipcode) VALUES ('$street', '$street_nb', '$type', '$city', '$zipcode')");

    if ($conn->query($sql) === TRUE) {
        echo "Adress added successfully to the database";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?> 