<?php

require_once './fonctions/connection.php';

if(isset($_REQUEST['btn_insert']))
{

	$nom	= $_REQUEST['nom'];	
	$prenom	= $_REQUEST['prenom'];
	$genre	= $_REQUEST['genre'];	
	$telephone	= $_REQUEST['telephone'];
	$adresse	= $_REQUEST['adresse'];	
	$age	= $_REQUEST['age'];
	$gSanguin	= $_REQUEST['gSanguin'];	
	$maladie	= $_REQUEST['maladie'];
	$antecedent	= $_REQUEST['antecedent'];	
	$taille	= $_REQUEST['taille'];
	$poids	= $_REQUEST['poids'];	
	$sMatrimoniale	= $_REQUEST['sMatrimoniale'];
	$telPersonneProche	= $_REQUEST['telPersonneProche'];
		
	if(empty($nom)){
		$errorMsg="Svp Entrez le nom";
	}
	else if(empty($prenom)){
		$errorMsg="Svp Entrez le prenom";
	}
	else if(empty($genre)){
		$errorMsg="Svp choisissez le genre";
	}
	else if(empty($telephone)){
		$errorMsg="Svp Entrez le telephone";
	}
	else if(empty($adresse)){
		$errorMsg="Svp Entrez l'adresse";
	}
	else if(empty($age)){
		$errorMsg="Svp Entrez l'age";
	}
	else if(empty($gSanguin)){
		$errorMsg="Svp choisissez le groupe sanguin";
	}
	else if(empty($maladie)){
		$errorMsg="Svp Entrez la maladie";
	}
	else if(empty($antecedent)){
		$errorMsg="Svp Entrez son antecedent";
	}
	else if(empty($taille)){
		$errorMsg="Svp Entrez la taille";
	}
	else if(empty($poids)){
		$errorMsg="Svp Entrez le poids";
	}
	else if(empty($sMatrimoniale)){
		$errorMsg="Svp choisissez sa situation matrimoniale";
	}
	else if(empty($telPersonneProche)){
		$errorMsg="Svp Entrez le telephone du personne proche";
	}
	else
	{
		try
		{
			if(!isset($errorMsg))
			{
				$insert_stmt=$db->prepare('INSERT INTO Patient(nom,prenom,genre,telephone,adresse,age,gSanguin,maladie,antecedent,taille,poids,sMatrimoniale,telPersonneProche) 
				VALUES(:nom,:prenom,:genre,:telephone,:adresse,:age,:gSanguin,:maladie,:antecedent,:taille,:poids,:sMatrimoniale,:telPersonneProche)'); 
				//sql insert query					
				$insert_stmt->bindParam(':nom',$nom);
				$insert_stmt->bindParam(':prenom',$prenom); 
				$insert_stmt->bindParam(':genre',$genre);
				$insert_stmt->bindParam(':telephone',$telephone);
				$insert_stmt->bindParam(':adresse',$adresse); 
				$insert_stmt->bindParam(':age',$age);
				$insert_stmt->bindParam(':gSanguin',$gSanguin);
				$insert_stmt->bindParam(':maladie',$maladie); 
				$insert_stmt->bindParam(':antecedent',$antecedent);
				$insert_stmt->bindParam(':taille',$taille);
				$insert_stmt->bindParam(':poids',$poids); 
				$insert_stmt->bindParam(':sMatrimoniale',$sMatrimoniale);
				$insert_stmt->bindParam(':telPersonneProche',$telPersonneProche);
					
				if($insert_stmt->execute())
				{
					$insertMsg="Données insérees avec succès........"; 
					header("refresh:3;liste_pat.php"); 
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
	<link rel="stylesheet" href="include/bootstrap.min.css">
    <link rel="stylesheet" href="include/style.css">
    <?php include 'include/style.php';?>
</head>
<body>
<?php include 'include/menu.php';?>  	
<div class="nic_bg1 ">
    <div class="wrapper">
	    <div class="container">	
		    <div class="col-lg-12">
		        <?php
		        if(isset($errorMsg))
		        {
			    ?>
                <div class="alert alert-danger">
            	    <strong>WRONG ! <?php echo $errorMsg; ?></strong>
                </div>
                <?php
		        }
		        if(isset($insertMsg)){
		        ?>
			    <div class="alert alert-success">
				    <strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
			    </div>
                <?php
		        }
		        ?> 
		        <div style="text-align: center;"><h2>AJOUTER UN PATIENT</h2></div> 
	            <form method="post" class="form-horizontal" style="justify-content-centrer">			       
	                <div class="col-sm-6 mb-3">
	                   <label class="col-sm-6 control-label" style="text-align: left;margin-left: 300px;" >NOM</label>
				       <input type="text" name="nom" class="form-control" placeholder="Entrez nom" style="margin-left: 250px;" required autofocus/>
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">PRENOM</label>
				       <input type="text" name="prenom" class="form-control" placeholder="Entrez prenom" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">GENRE</label>
				        <select class="form-select"  aria-label="Default select example" name="genre" style="margin-left: 250px;" required>
                            <option selected > Genre </option>
                            <option value="Masculin">Masculin</option>
                            <option value="Feminin">Feminin</option>
					        <option value="Autre">Autre</option>
                        </select>
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">TELEPHONE</label>
				       <input type="text" name="telephone" class="form-control" placeholder="Telephone" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;" >ADRESSE</label>
				       <input type="text" name="adresse" class="form-control" placeholder="Entrez l'adresse" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">AGE</label>
				       <input type="text" name="age" class="form-control" placeholder="Entrez l'age" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">GROUPE SANGUIN</label>
				       <select class="form-select"  aria-label="Default select example" name="gSanguin" style="margin-left: 250px;" required>
                           <option selected >Groupe Sanguin</option>
                           <option value="A+">A+</option>
                           <option value="A-">A-</option>
					       <option value="B+">B+</option>
					       <option value="A+">B-</option>
                           <option value="A-">AB+</option>
					       <option value="B+">AB-</option>
					       <option value="A-">O+</option>
					       <option value="B+">0-</option>
                       </select>
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;" >MALADIE</label>
				       <input type="text" name="maladie" class="form-control" placeholder="Entrez la maladie" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">ANTECEDENT</label>
				       <input type="text" name="antecedent" class="form-control" placeholder="Entrez l'antecedent" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">TAILLE</label>
				       <input type="text" name="taille" class="form-control" placeholder="Entrez sa taille" style="margin-left: 250px;" required/>
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">POIDS</label>
				       <input type="text" name="poids" class="form-control" placeholder="Entrez son poids" style="margin-left: 250px;" required />
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">SITUATION MATRIMONIALE</label>
				       <select class="form-select"  aria-label="Default select example" name="sMatrimoniale" style="margin-left: 250px;" required>
                           <option selected >Situation matrimoniale</option>
                           <option value="Celibataire">Célibataire</option>
                           <option value="Marie">Marié</option>
					       <option value="Mariee">Mariée</option>
					       <option value="Divorce">Divorcé</option>
                           <option value="Divorcee">Divorcée</option>
					       <option value="Divorcee">Veuf</option>
					       <option value="Divorcee">Veuve</option>
                        </select>
				    </div>
				    <div class="col-sm-6 mb-3">
				       <label class="col-sm-6 control-label" style=" text-align: left;margin-left: 300px;">TEL PERSONNE PROCHE</label>
				       <input type="text" name="telPersonneProche" class="form-control" placeholder="Telephone personne proche" style="margin-left: 250px;" required />
				    </div>
                    <div class="col-sm-6 mb-3" >
                        <div class="col-sm-offset-3 col-sm-9 m-t-15" style="margin-left: 250px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                               Ajouter
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Voulez-vous vraiment ajouter un patient?
                                        </div>
                                        <div class="modal-footer">
	                                      <button  class="btn btn-success" type="submit"  name="btn_insert" class="btn btn-danger " value="Ajouter" >Oui</button>
                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
		                    <a href="liste_pat.php" class="btn btn-dark">Annuler</a>
		                </div>
				    </div>
	            </form>
		    </div>
	    </div>
	</div>
	<br>
</div>	
<?php include 'include/pied.php';?>
<?php include 'include/script.php';?>
<script src="include/bootstrap.bundle.min.js"></script>
<script src="include/bootstrap.min.js"></script>									
	</body>
</html>