<?php
            
if(isset($_POST['nameGame'])) 
    {
        if(!empty($_POST['nameGame'])) 
        {
            
            $dsn = 'mysql:host=127.0.0.1;dbname=ecf';
            $username = 'root';
            $password = 'root';

            $nameGame = $_POST['nameGame'];
            $description = $_POST['description'];
            $studio = $_POST['studio'];
            $type = $_POST['type'];
            $poids = $_POST['poids'];
            $moteur = $_POST['moteur'];
            $dateCreation = $_POST['date-creation'];
            $dateUpdate = $_POST['update'];
            $dateFin = $_POST['date-de-fin'];
            $status = $_POST['status'];
            $nbPlayers = $_POST['nb-players'];

            try{    
                
                $pdo = new PDO($dsn, $username, $password); 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                
                $query = "INSERT INTO `jeu` (`nom`, `description`,  `studio`, `type`, `poids`, `moteur`, `date_de_creation`, `mise_a_jour`, `date_de_fin`, `status`, `joueurs`) 
                            VALUES (:name, :describe, :studio, :type, :poids, :moteur, :creation, :update, :end , :status, :players)"; // :nom = On met ce qu'on veut comme nom (sert pour la reliure)
                $stmt1 = $pdo->prepare($query); //PREPARATION DE L'ENVOI
                $stmt1->bindParam('name', $nameGame); 
                $stmt1->bindParam('describe', $description); 
                $stmt1->bindParam('studio', $studio); 
                $stmt1->bindParam('type', $type); 
                $stmt1->bindParam('poids', $poids); 
                $stmt1->bindParam('moteur', $moteur); 
                $stmt1->bindParam('creation', $dateCreation); 
                $stmt1->bindParam('update', $dateUpdate); 
                $stmt1->bindParam('end', $dateFin); 
                $stmt1->bindParam('status', $status); 
                $stmt1->bindParam('players', $nbPlayers); 
                $stmt1->execute(); 
                
                echo "JEU CRÉÉ ";
                echo '<br>' . '<br>';

            }
            catch(PDOException $pdoexc){    //ERREUR DE CONNEXION A LA BDD AVEC LE MESSAGE GRACE A PDO
                echo "ERREUR : " . $pdoexc->getMessage();
            }

        }

        else echo "VEUILLEZ REMPLIR LES CHAMPS DU FORMULAIRE";  //SI L'UTILISATEURS OUBLI UN OU PLUSIEURS CHAMPS

    }
    else echo "Une ou plusieurs variables n existent pas";  //SI PRBLEME AVEC LES VARIABLES

?>
            
