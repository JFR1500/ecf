<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=ecf';
    $username = 'root';
    $password = 'root';

    $email = $_POST['email'];
    $postPassword = $_POST['password'];

    try
    {   
        $pdo = new PDO($dsn, $username, $password); //IDENTIFICATION A LA BDD VIA PDO DE PHP
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //AJOUT D'ATTRIBUTS DE PDO POUR LE RETOUR DES ERREURS

        $query = 'SELECT * FROM users'; //REQUETE 
        $results = $pdo->query($query);
        foreach($results as $varTemporaire){}   //varTemporaire contient les données

        //TEST EMAIL ET MOT DE PASSE IDENTIQUE DANS LA BDD
        if($varTemporaire['email'] == $email && $varTemporaire['password'] == $postPassword )
        {
            echo "Bienvenu : ";
        }
        else echo "Mot de passe ou adresse email incorrect";
    }
    
    catch(PDOException $pdoexc){    //ERREUR DE CONNEXION A LA BDD AVEC LE MESSAGE GRACE A PDO
        echo "Erreur de connexion à la bdd : " . $pdoexc->getMessage();
    }

?>
            
            


