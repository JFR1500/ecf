<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=ecf';
    $username = 'root';
    $password = 'root';

    try{    

        $pdo = new PDO($dsn, $username, $password); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $query = 'SELECT * FROM jeu';  
        $results = $pdo->query($query);
        foreach($results as $varTemporaire)
        {
            print_r($varTemporaire['id']);
            echo '<br>';
            print_r($varTemporaire['nom']);
            echo '<br>';
            print_r($varTemporaire['description']);
            echo '<br>';
            print_r($varTemporaire['studio']);
            echo '<br>';
            print_r($varTemporaire['type']);
            echo '<br>';
            print_r($varTemporaire['poids']);
            echo '<br>';
            print_r($varTemporaire['moteur']);
            echo '<br>';
            print_r($varTemporaire['date_de_creation']);
            echo '<br>';
            print_r($varTemporaire['mise_a_jour']);
            echo '<br>';
            print_r($varTemporaire['date_de_fin']);
            echo '<br>';
            print_r($varTemporaire['status']);
            echo '<br>';
            print_r($varTemporaire['joueurs']);
            echo '<br>' . '<br>';

        }

    }
    catch(PDOException $pdoexc){    //ERREUR DE CONNEXION A LA BDD AVEC LE MESSAGE GRACE A PDO
        echo "ERREUR : " . $pdoexc->getMessage();
    }

?>
            
            