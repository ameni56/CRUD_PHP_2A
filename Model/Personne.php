<?php 

class Personne{
    private ?int $id;
private string $nom;
private string $prenom;
private string $email;
private int $age;


function __construct($id,$nom,$prenom,$email,$age){
    $this->id=$id;
 $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->age=$age;

}
function getId(){
    return $this->id;
}
function setId($id){
    $this->id=$id;
}
function getNom(){
    return $this->nom;
}
function getPrenom(){
    return $this->prenom;
}
function getEmail(){
    return $this->email;
}
function getAge(){
    return $this->age;
}
function setNom($nom){
    $this->nom=$nom;
}
function setPrenom($prenom){
    $this->prenom=$prenom;
}
function setEmail($email){
    $this->email=$email;
}
function setAge($age){
    $this->age=$age;
}
function saisir($nom,$prenom,$email,$age){
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->age=$age;

}

function afficher(){

    echo "Nom: ".$this->nom."<br>"."Prenom :".$this->prenom."Email :".$this->email."Age :".$this->age;
}

}
// }
// $personne=new Personne("ahmed","salah","ahmed@esprit.tn",22);
// // $personne->saisir("ahmed","salah","ahmed@esprit.tn",22);
// $personne->afficher();
// $personne->setNom("marwen");
// echo $personne->getNom();
// $personne->afficher();


// class Auteur extends Personne{
//     private $livre;

//     public function getLivre(){
//         return $this->livre;
//     }
//     public function setLivre($livre){
//         $this->livre=$livre;
//     }
//     public function __construct($nom,$prenom,$email,$age,$livre){
//         parent::__construct($nom,$prenom,$email,$age);
//         $this->livre=$livre;
//     }
// public function afficher(){
//     parent::afficher();
//     echo "livre : ".$this->livre;
// }
// }

// $auteur=new Auteur("ribel","ben abdallah","ribel@esprit.tn",19,"les misérables");
// echo "<br>";

// $auteur->afficher();


?>