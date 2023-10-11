<?php
        $mysqli = new mysqli("localhost", "root", "root", "socialnetwork");
        
        // Setting a variable for the user's ID
        if (isset($_SESSION['connected_id'])) {
                $connectedUserId = $_SESSION['connected_id'];
        }
        ;

        //verification
        if ($mysqli->connect_errno)
        {
                echo("Échec de la connexion : " . $mysqli->connect_error);
                exit();
        }
        ;
?>