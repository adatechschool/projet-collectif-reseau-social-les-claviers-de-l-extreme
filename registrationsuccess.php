<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ReSoC - Inscription</title> 
        <meta name="author" content="Julien Falconnet">
        <link rel="stylesheet" href="style.css"/>
    </head>

    

    <div id="wrapper" >

            <aside>
                <h2>Présentation</h2>
                <p>Bienvenue sur notre réseau social.</p>
            </aside>
            <main>
                <article>
                    <h2>Votre inscription a bien été effectuée, <?php
                    // Démarrer la session PHP
                    session_start();
                    // Vérifier si le nom d'utilisateur est stocké dans la variable de session
                    if (isset($_SESSION['alias'])) {
                    $alias = $_SESSION['alias'];
                    $chaineMajuscule = ucfirst($alias);
                    
                    echo "$chaineMajuscule !";
                    } else {
                    echo "Veuillez vous connecter.";
                    }
                    ?></h2>

                    <a href='news.php'>Aller sur mon profil !</a>
                    
                    <?php
                    
                    ?>                     
                    
                </article>
            </main>
        </div>

</html>