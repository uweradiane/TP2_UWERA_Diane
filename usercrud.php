<?php
function createUser(array $data)
{
    global $conn;
    //session_start();
    //$conn = $_SESSION['connexion'];
    /**
     * Création du'une requete SQL préparée 
     * en vue  d'une insertion 
     */
    $query = "INSERT INTO address VALUES (NULL, ?, ?, ?)";

    
    if ($stmt = mysqli_prepare($conn, $query)) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $data['street'],
            $data['street_nb'],
            $data['type'],
            $data['city'],
            $data['zipcode'],

        );

        /* Exécution de la requête */
        $result = mysqli_stmt_execute($stmt);
    }
}