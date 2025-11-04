<?php

require_once __DIR__. '/../../Controller/PersonneController.php';

$personneC=new PersonneController();

if($_SERVER['REQUEST_METHOD']==='POST'){
if(
isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])&& isset($_POST['age'])){
     
    if(
        !empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty($_POST['email'])&& !empty($_POST['age']))
    {
    $personne=new Personne(null,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['age']);
    $personneC->AddPersonne($personne);

    }}
    
}
    

 

   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>Prenom</label>
         <input type="text" name="prenom">
        <label>Email</label>
         <input type="text" name="email">
        <label>Age</label>
         <input type="number" name="age">
         <button type="submit">Envoyer</button>
</body>
</html>