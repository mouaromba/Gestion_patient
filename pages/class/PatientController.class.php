<?php

class PatientController
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function ajouter(Patient $Patient)
   {
     $sql=$this->_db->prepare("INSERT INTO Patient SET nom=:nom, prenom=:prenom, genre=:genre, telephone=:telephone, adresse=:adresse, age=:age, 
     gSanguin=:gSanguin, maladie=:maladie, antecedent=:antecedent, taille=:taille, poids=:poids, sMatrimoniale=:sMatrimoniale, 
     telPersonneProche=:telPersonneProche ");
     $sql->bindValue(":nom",$Patient->getNom());
     $sql->bindValue(":prenom",$Patient->getPrenom());
     $sql->bindValue(":genre",$Patient->getGenre());
     $sql->bindValue(":telephone",$Patient->getTelephone());
     $sql->bindValue(":adresse",$Patient->getAdresse());
     $sql->bindValue(":age",$Patient->getAge());
     $sql->bindValue(":gSanguin",$Patient->getG_sanguin());
     $sql->bindValue(":maladie",$Patient->getMaladie());
     $sql->bindValue(":antecedent",$Patient->getAntecedent());
     $sql->bindValue(":taille",$Patient->getTaille());
     $sql->bindValue(":poids",$Patient->getPoids());
     $sql->bindValue(":sMatrimoniale",$Patient->getS_matrimoniale());
     $sql->bindValue(":telPersonneProche",$Patient->getTel_personne_proche());
     $sql->execute();
   }

   public function get($id)
   {
     $sql=$this->_db->query("SELECT * FROM Patient WHERE id=".$id);
     $row=$sql->fetch();
     $sql->closeCursor();
     $p=new Patient($row);
     return $p;
   }

   public function supprimer($id)
   {
     $sql=$this->_db->exec("DELETE  FROM Patient WHERE id=".$id);
     return $sql>0;
   }
   
   public function afficher_list()
   {
     $Patient=[];
     $sql=$this->_db->query("SELECT * FROM Patient ORDER BY nom, prenom ASC");
     $rows=$sql->fetchAll();
     $sql->closeCursor();
     
     foreach ($rows as $row) {

     $Patient[]=new Patient($row);
     }
     return $Patient;
   }

 public function modifier(Patient $Patient)
   {
    //echo $patient->getId();
     try{ 
            $sql=$this->_db->prepare("UPDATE  Patient SET nom=:nom, prenom=:prenom, genre=:genre, telephone=:telephone, adresse=:adresse, age=:age, 
            gSanguin=:gSanguin, maladie=:maladie, antecedent=:antecedent, taille=:taille, poids=:poids, sMatrimoniale=:sMatrimoniale, 
            telPersonneProche=:telPersonneProche WHERE id=:id");
            $d=$sql->execute(array('nom'=>$Patient->getNom(),
            'prenom'=>$Patient->getPrenom(),
            'genre'=>$Patient->getGenre(),
            'telephone'=>$Patient->getTelephone(),
            'adresse'=>$Patient->getAdresse(),
            'age'=>$Patient->getAge(),
            'gSanguin'=>$Patient->getG_sanguin(),
            'maladie'=>$Patient->getMaladie(),
            'antecedent'=>$Patient->getAntecedent(),
            'taille'=>$Patient->getTaille(),
            'poids'=>$Patient->getPoids(),
            'sMatrimoniale'=>$Patient->getS_matrimoniale(),
            'telPersonneProche'=>$Patient->getTel_personne_proche(),
            'id'=>$Patient->getId()
          ));  
     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}
