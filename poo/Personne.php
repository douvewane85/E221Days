<?php 

class Personne{

    //Caracteristiques
    //Encapsulation=>visibilite attributs(private ou protected) et methode(public)

   private $nom;
   private  $prenom;
    private $age;
//Interface de la classe
    //getters => Accesseurs
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAge(){
        return $this->age;
    }
    //et Setters ou mutateurs



    public function setNom($nom){
        $this->nom=$nom;
    }

}




?>