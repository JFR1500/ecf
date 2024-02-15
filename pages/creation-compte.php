<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css">
 	    <title>CREATION COMPTE</title>
    </head>   
    <body>
        <header class="header">
            <div class="menu-header"><div><img class="logo" src="../images/logo.jpg" alt="Logo" width="100rem" height="100rem"></div></div>  
            <div class="menu-header">
                <div class="hb1"><a href="../index.php">ACCUEIL</a></div>
                <div class="hb1"><a href="../pages/jeux.php">JEUX</a></div>
                <div class="hb1"><a href="../pages/actualites.php">ACTUALITES</a></div>
                <div class="hb1"><a href="../pages/forum.php">FORUM</a></div>
                <div class="hb1"><a href="../pages/favoris.php">FAVORIS</a></div>
            </div>  
            <div class="menu-header"><div class="connexion"><a href="../pages/connexion.php">CONNEXION</a></div></div>  
        </header>        
        <main class="main-creation-compte">
            <div class="connexion-blocs">               
                <form class="form-creation-compte" method="post" action="../includes/classes/CreateUser.php"> 
                    <p><label for="name">NOM : </label> <input type="text" id="name" name="name"></p>
                    <p><label for="firstname">PRENOM : </label> <input type="text" id="firstname" name="firstname"></p>
                    <p><label for="email"> EMAIL : </label> <input type="email" id="email" name="email">"</p>
                    <p><label for="password">NOUVEAU MOT DE PASSE : </label> <input type="password" id="password" name="password"></p>
                    <p><input type="submit" name="valid_form" value="valider"></p>
                </form>
            </div>
        </main>
        <footer class="footer-menu">            
            <div class="footer-menu-lien"><a href="./mentions-legales.php">MENTIONS LEGALES</a></div>
        </footer>    
    </body>
</html>
