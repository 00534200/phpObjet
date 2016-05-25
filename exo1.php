<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;
  protected $email;

  function __construct($id,$nom,$prenom,$email){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
  }

   function getNom(){
    return $this->nom ;
  }
   function setNom($nom){
    return $this->nom = $nom ;
  }

   function getPrenom(){
    return $this->prenom ;
  }

   function setPrenom(){
    return $this->prenom = $prenom;
  }

  function __toString(){
   return "id =".$this->id."nom =" .$this->nom." prenom =".$this->prenom. " email = ".$this->email ; 
  }
}

$perso = new personne(77,"simon","carlu","nico@hotmail.fr");
echo $perso;


?>