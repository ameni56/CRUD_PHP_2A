


<?php 
require __DIR__. "/../Model/config.php";
require __DIR__. "/../Model/personne.php";

class PersonneController{
function getAllPersonnes(){
$sql="SELECT * FROM Personne";
$db=config::getConnexion();
try{
    $query=$db->prepare($sql);
    $query->execute();
    return $query->fetchAll();

}
catch(Exception $e){
    echo ("erreur".$e->getMessage());
}
}

function AddPersonne($personne){
    $sql="INSERT INTO Personne(id,nom,prenom,email,age) VALUES
    (null,:nom,:prenom,:email,:age)";
    $db=config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->bindValue('nom',$personne->getNom());
        $query->bindValue('prenom',$personne->getPrenom());
        $query->bindValue('email',$personne->getEmail());
        $query->bindValue('age',$personne->getAge());
        $query->execute();
    }
    catch(Exception $e){
    echo ("erreur".$e->getMessage());
}}

function updatePersonne($personne,$id){
    $sql="UPDATE personne SET nom=:nom,prenom=:prenom,email=:email,age=:age WHERE id=:id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    try{
        $query->execute([
            'id'=>$id,
            'nom'=>$personne->getNom(),
            'prenom'=>$personne->getPrenom(),
            'email'=>$personne->getEmail(),
            'age'=>$personne->getAge()
        ]);
        echo $query->rowCount();

    }
     catch(Exception $e){
    echo ("erreur".$e->getMessage());
}

}
function DeletePersonne($id){
$sql="DELETE FROM personne WHERE id=:id";
$db=config::getConnexion();
$query=$db->prepare($sql);
try{
    $query->execute([
        'id'=>$id,
    ]);
}
 catch(Exception $e){
    echo ("erreur".$e->getMessage());
}



}
// Récupérer une seule personne par ID 
    function showPersonne($id) {
        $sql = "SELECT * FROM personne WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            return $query->fetch();
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}



//  $personne=new Personne('Rayen','Masoud','Rayen@esprit.tn',23);
//   AddPersonne($personne);
//   updatePersonne($personne,5)
// DeletePersonne(5);


// print_r (getAllPersonnes());


?>