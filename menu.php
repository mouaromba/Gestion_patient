<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar  navbar-light">
        <div class="container-fluid m-2 d-flex ">
            <img src="./Images/logo.jpg" alt="" width="230px" height="100px">
            <div id="text">
                <a href="home.php">Accueil</a>
            </div>
            <div id="text">
                <a href="about.php">Ajouter</a>
            </div>
            <div id="text">
                <a href="formulaire.php">Liste</a>
            </div>
            
            <div id="rche"> 
                <form action="">
                    <input type="search" aria-label="Search" id="myInput" onkeyup="myFunction()">
                    <button type="submit" bg-primary>Search</button>
               </form>  
            </div>
        </div>
      </nav>

   <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
   <script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
   <script src="./bootstrap-5.1.3-dist/js/bootstrap.min.js"></script> 
</body>
</html>