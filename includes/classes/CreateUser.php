
<?php
            
if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password'])) //TEST EXISTANCE DES VARIABLES
    {
        if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])) //TEST DES DONNEES RENTREES PAR L'UTILISATEUR
        {
            
            $dsn = 'mysql:host=127.0.0.1;dbname=ecf';
            $username = 'root';
            $password = 'root';
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $userPostPassword = $_POST['password'];

            try{    
                //CONNECTION A LA BDD
                $pdo = new PDO($dsn, $username, $password); //IDENTIFICATION A LA BDD VIA PDO DE PHP
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //AJOUT D'ATTRIBUTS DE PDO POUR LE RETOUR DES ERREURS

                //INSERTION DES DONNEES DANS LA BASE DE DONNEES
                $query1 = "INSERT INTO `users` (`name`, `firstname`, `email`, `password`) VALUES (:name, :firstname, :email, :password)"; //REQUETE AVEC LES REFERENCES AU VARIABLES
                $stmt1 = $pdo->prepare($query1); //PREPARATION DE L'ENVOI
                $stmt1->bindParam('name', $name); //RELIURE DES VARIABLES
                $stmt1->bindParam('firstname', $firstname);
                $stmt1->bindParam('email', $email);
                $stmt1->bindParam('password', $userPostPassword); 
                $stmt1->execute(); //EXECUTION DE LA REQUETE 
                
                echo "COMPTE CREER FELICITATION : " . $_POST['firstname'];
                echo '<br>' . '<br>';


            }
            catch(PDOException $pdoexc){    //ERREUR DE CONNEXION A LA BDD AVEC LE MESSAGE GRACE A PDO
                echo "Erreur de conexion à la bdd : " . $pdoexc->getMessage();
            }

        }

        else echo "VEUILLEZ REMPLIR LES CHAMPS DU FORMULAIRE";  //SI L'UTILISATEURS OUBLI UN OU PLUSIEURS CHAMPS

    }
    else echo "Une ou plusieurs variables n existent pas";  //SI PRBLEME AVEC LES VARIABLES

?>
            
            
            
