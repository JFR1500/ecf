
<?php
            
if(isset($_POST['email']) && isset($_POST['new-password'])) //TEST EXISTANCE DES VARIABLES
    {
        if(!empty($_POST['email']) && !empty($_POST['new-password'])) //TEST DES DONNEES RENTREES PAR L'UTILISATEUR
        {
            
            $dsn = 'mysql:host=127.0.0.1;dbname=ecf';
            $username = 'root';
            $password = 'root';
            $email = $_POST['email'];
            $newPassword = $_POST['new-password'];

            try{    //ESSAI POUR SE CONNECTER A LA BDD
                $pdo = new PDO($dsn, $username, $password); //IDENTIFICATION A LA BDD VIA PDO DE PHP
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //AJOUT D'ATTRIBUTS DE PDO POUR LE RETOUR DES ERREURS

                $query = "UPDATE users SET password=:password WHERE email=:email"; 
                $stmt = $pdo->prepare($query); //PREPARATION DE L'ENVOI
                $stmt->bindParam('email', $email);
                $stmt->bindParam('password', $newPassword); 
                $stmt->execute(); //EXECUTION DE LA REQUETE 
                
                echo "VOTRE NOUVEAU MOT DE PASSE EST ACTUALISÉ";

            }
            catch(PDOException $pdoexc){    //ERREUR DE CONNEXION A LA BDD AVEC LE MESSAGE GRACE A PDO
                echo "Erreur de conexion à la bdd : " . $pdoexc->getMessage();
            }

        }

        else echo "VEUILLEZ REMPLIR LES CHAMPS DU FORMULAIRE";  //SI L'UTILISATEURS OUBLI UN OU PLUSIEURS CHAMPS

    }
    else echo "Une ou plusieurs variables n existent pas";  //SI PRBLEME AVEC LES VARIABLES

?>
            
            
            
