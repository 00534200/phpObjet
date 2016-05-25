<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;


  function __construct($id,$nom,$prenom){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
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
   return "id =".$this->id."nom =" .$this->nom." prenom =".$this->prenom ; 
  }
}

$perso = new personne(77,"simon","carlu");
echo $perso;


?>