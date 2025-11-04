<?php
require_once __DIR__."/../../Controller/PersonneController.php";
$personneC=new PersonneController();
$personneC->DeletePersonne($_GET['id']);

header('location:listPersonne.php')



?>