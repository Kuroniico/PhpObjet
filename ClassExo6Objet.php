<?php
class personnage{
    public $bdd;
    public $nom;
    public $id;
    public function __construct($idPersonnage){
        $this->bdd=new PDO('mysql:host=192.168.65.194;dbname=Rabaste_ObjetExo5','root','root');
        $personnage=$this->bdd->query("SELECT * FROM Personnage WHERE id=$idPersonnage")->fetch();
        $this->nom=$personnage["nom"];
        $this->nom=$personnage["idPersonnage"];
    }

    public function afficher(){
        echo $this->nom." ".$this->id;
        
    }
}



?>