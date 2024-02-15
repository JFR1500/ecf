<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/style.css">
 	    <title>JEUX</title>
    </head>
    <body style="font-size: small;" class="page">
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
        <main class="main-jeux">
            <h2>CREER UN JEU</h2>
            <div class="jeu-prod">     
                <form class="jeu-prod-text-img" method="post" action="../includes/classes/CreateGame.php"> 
                    <p><label for="name">NOM DU JEU : </label> <input type="text" id="nameGame" name="nameGame"></p>
                    <p><label for="description">DESCRIPTION : </label> <input type="text" id="description" name="description"></p>
                    <p><label for="studio">STUDIO : </label> <input type="text" id="studio" name="studio"></p>
                    <p><label for="type">TYPE DE JEU : </label> <input type="text" id="type" name="type"></p>
                    <p><label for="poids">POIDS : </label> <input type="text" id="poids" name="poids"></p>
                    <p><label for="moteur">MOTEUR DE JEU : </label> <input type="text" id="moteur" name="moteur"></p>
                    <p><label for="date-creation">DATE DE CREATION : </label> <input type="text" id="date-creation" name="date-creation"></p>
                    <p><label for="update">DATE DE DERNIERE MISE A JOUR : </label> <input type="text" id="update" name="update"></p>
                    <p><label for="date-de-fin">DATE DE FIN ESTIMEE : </label> <input type="text" id="date-de-fin" name="date-de-fin"></p>
                    <p><label for="status">STATUS : </label> <input type="text" id="status" name="status"></p>
                    <p><label for="nb-players">NOMBRE DE JOUEURS : </label> <input type="text" id="nb-players" name="nb-players"></p>
                    <p><input type="submit" name="valid_form" value="valider"></p>
                </form>
                <div class="jeu-prod-img">IMAGE</div>
            </div>
            <h2>TOUS LES JEUX</h2>
            <div class="jeu-prod">     
                    <p><?php include('../includes/classes/RecupGames.php'); ?></p>
                <div class="jeu-prod-img">IMAGE</div>
            </div>
        </main>
        <footer class="footer-menu">            
            <div class="footer-menu-lien"><a href="./mentions-legales.php">MENTIONS LEGALES</a></div>
        </footer>    
    </body>
</html>
