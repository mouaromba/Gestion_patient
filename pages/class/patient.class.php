<?php

class Patient
{
  private $id;
  private $nom;
  private $prenom;
  private $genre;
  private $telephone;
  private $adresse;
  private $age;
  private $gSanguin;
  private $maladie;
  private $antecedent;
  private $taille;
  private $poids;
  private $sMatrimoniale;
  private $telPersonneProche;

  public function __construct(array $donnee){

    foreach ($donnee as $key => $value) {

        $methode='set'.ucfirst($key);
        
        if((method_exists($this,$methode))){
          $this->$methode($value);
        }
    }
  }

  // les getters

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGSanguin()
    {
        return $this->gSanguin;
    }
    public function getMaladie()
    {
        return $this->maladie;
    }

    public function getAntecedent()
    {
        return $this->antecedent;
    }

    public function getTaille()
    {
        return $this->taille;
    }
    public function getPoids()
    {
        return $this->poids;
    }
    public function getSMatrimoniale()
    {
        return $this->sMatrimoniale;
    }
    public function getTelPersonneProche()
    {
        return $this->telPersonneProche;
    }

    // les setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setGSanguin($gSanguin)
    {
        $this->gSanguin = $gSanguin;
    }

    public function setMaladie($maladie)
    {
        $this->maladie = $maladie;
    }

    public function setAntecedent($antecedent)
    {
        $this->antecedent = $antecedent;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;
    }
    
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }
    
    public function setSMatrimoniale($sMatrimoniale)
    {
        $this->sMatrimoniale = $sMatrimoniale;
    }
    
    public function setTelPersonneProche($telPersonneProche)
    {
        $this->telPersonneProche = $telPersonneProche;
    }
    
}


