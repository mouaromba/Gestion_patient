<html>
    <head>
       <meta charset="utf-8">
      
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <p> SOYEZ LES BIENVENUES</p>
        <hr noshade="noshade"> 
        <div class="home">
            <div id="container0">
                <img src="./image/1.png" alt="">
            </div>
            <div id="container">
               
            
                <form action="verification.php" method="POST">
                    <div id="texte4">
                        <p>Connexion</p>
                    </div>
                    
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter  username" name="username" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter password" name="password" required>

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
        </div>
        
        <div id="texte2">
            <p style:"color= black">Copyright@2022|Designed with by JNP </p>
        </div>
    
    </body>
</html>
