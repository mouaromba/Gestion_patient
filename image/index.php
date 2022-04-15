<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="texte1">
            <p>Soyez les bienvenues </p>
            <hr>
        </div>
        <div class="general">
            <div>
                <img src="/1.png" alt="" srcset="">
            </div>

        </div>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <div id="texte4">
                    <p>Connexion</p>
                </div>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
        <div id="texte2">
            <p>Copyright@2022|Designed with by JNP </p>
        </div>
    </body>
</html>