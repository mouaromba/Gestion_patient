<?php
require_once './fonctions/connection.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimer</title>
    <?php include 'include/style.php';?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css">
</head>
<body onload="window.print()">
<h1 style="font-family: Bahnschrift SemiCondensed; text-align: center;">LISTE DES PATIENTS</h1>
<div class="panel-body imprimable">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NOM</th>
											<th>PRENOM</th>
                                            <th>GENRE</th>
                                            <th>TELEPHONE</th>
                                            <th>ADRESSE</th>
                                            <th>TEL PERSON PROCHE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$select_stmt=$db->prepare("SELECT * FROM Patient");	
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['nom']; ?></td>
											<td><?php echo $row['prenom']; ?></td>
                                            <td><?php echo $row['genre']; ?></td>
                                            <td><?php echo $row['telephone']; ?></td>
                                            <td><?php echo $row['adresse']; ?></td>
                                            <td><?php echo $row['telPersonneProche']; ?></td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <?php include 'include/script.php';?>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>
                        </body>
</html>