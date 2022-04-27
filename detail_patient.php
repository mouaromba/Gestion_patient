<?php
require_once './fonctions/connection.php';
require_once 'autoload.php';

$bd=bd();
$Patient_ctrl =new PatientController($bd);
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $valuer=$Patient_ctrl->get((int)$id);
    //echo $id;
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="include/style.css">
        <title>Detail patient</title>
        <?php include 'include/style.php';?>
    </head>
    <body>

    <?php include 'include/menu.php';?> 
    <div class="nic_bg ">
    <br>
    <div style="text-align: center;">
      <h4 style="font-family: Algerian;">DETAIL DU PATIENT N° <?= $id ?></h4>
    </div>
<div class="nic_detail d-flex" id='formulaire_bircof' style="background-color: white; margin-left: 20px; margin-right: 20px;">
  <div class="nic_detail2 col-md-4" style="margin: 30px;">
    <label for="" style="width: 200px;"><strong>Nom:</strong></label> <span> <?= $valuer->getNom()?> </span> <br>
    <label for="" style="width: 200px;"><strong>Prenom:</strong></label> <span><?= $valuer->getPrenom()?></span> <br>
    <label for="" style="width: 200px;"><strong>Genre:</strong></label><span> <?= $valuer->getGenre()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Telephone:</strong></label><span> <?= $valuer->getTelephone()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Adresse:</strong></label> <span> <?= $valuer->getAdresse()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Age:</strong></label><span> <?= $valuer->getAge()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Groupe Sanguin:</strong></label><span> <?= $valuer->getGSanguin()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Maladie:</strong></label><span> <?= $valuer->getMaladie()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Antecedent:</strong></label><span> <?= $valuer->getAntecedent()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Taille:</strong></label><span> <?= $valuer->getTaille()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Poids:</strong></label><span> <?= $valuer->getPoids()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>S Matrimoniale:</strong></label><span> <?= $valuer->getSMatrimoniale()?> </span>  <br>
    <label for="" style="width: 200px;"><strong>Tel personne proche:</strong></label><span> <?= $valuer->getTelPersonneProche()?> </span>  <br>
  </div>
  <div class="nic_detail3 col-md-8" style="margin: 15px;">
    <img src="image/accueil.jpg" class="nic_bg" alt="" style="width: 740px; height: 340px;">
  </div>
</div>   
<br> 
<div class='button'>
<a href="liste_pat.php"> <button class="btn btn-outline-danger" id="btn-ajout" style="background-color: blue; margin-left: 20px;"> Retour </button></a>
</div>
<br>
</div>
<?php include 'include/pied.php';?>
<?php include 'include/script.php';?>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>

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

