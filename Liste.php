
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <?php
            include 'menu.php'
         ?>
         <div id="texte3">
            <p>Liste des articles </p>
        </div>
        
        <div id="container-fluid">
            <!-- zone de connexion -->
            <div id="actionb">
                <a type="button" class="btn btn-light" href="formulaire.php">
                    <img src="./Images/plus.png" alt="" width="70" height="40">
                </a>
                <a type="button" class="btn btn-light" href="impression.php">
                    <img src="./Images/imp.png" alt="" width="70" height="40">
                </a>
            </div>
            <form action="insertion.php" method="POST"><br>
                
                <table class="table table bordered " id="myTable" border="1">
                    <thead class="table-primary">
                        <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">LIBELLE</th>
                        <th scope="col">QUANTITE</th>
                        <th scope="col">PRIX UNITAIRE</th>
                        <th scope="col">DATE</th>
                        <th scope="col">LIEU DE PROVENANCE</th>
                        <th scope="col">MODIFIER</th>
                        <th scope="col">SUPPRIMER</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php

                            try {
                            // se connecter à mysql
                            $pdo = new PDO("mysql:host=localhost;dbname=bdgppat", "root", "");
                            } catch (PDOException $exc) {
                            echo $exc->getMessage();
                            exit();
                            }

                            // mysql select query
                            //$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
                            $q = $pdo->prepare('SELECT * FROM Patient');

                            $q->execute();
                            $data = $q->fetchAll();

                        ?>

                        <?php
                        foreach ($data as $donnee) {
                        ?>
                            <tr>
                                <td><?php echo $donnee['Id']; ?></td>
                                <td><?php echo $donnee['Nom']; ?></td>
                                <td><?php echo $donnee['Prenom']; ?></td>
                                <td><?php echo $donnee['Sexe']; ?></td>
                                <td><?php echo $donnee['Telephone']; ?></td>
                                <td><?php echo $donnee['Adresse']; ?></td>
                                <td><a href='edit.php?id=<?php echo $donnee["Id"]; ?>' 
                                      type="button" class="btn btn-primary">Modifier</a></td>
                                <td><a href='delete.php?id=<?php echo $donnee["codeArticle"]; ?>'
                                     onclick='return confirm("Etes-vous sûr ?")' type="button" class="btn btn-danger">Supprimer</a></td>
                            </tr>

                        <?php
                        }
                      ?>
                    </tbody>
                </table> 
                <br><br><br> 
            </form>
            <br><br>
        </div>
        <div id="texte2">
            <p>Copyright@2022|Designed with by CIJ </p>
        </div>
        <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

        
    </body>
</html>