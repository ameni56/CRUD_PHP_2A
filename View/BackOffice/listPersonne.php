<?php 
require_once __DIR__.'/../../Controller/PersonneController.php';
$personneC=new PersonneController();
$list =$personneC->getAllPersonnes();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nom</th>
              <th>Prenom</th>  <th>Email</th>
                <th>Age</th>
</tr>
<?php foreach($list as $pers){ ?>
    <tr>
        <td><?php echo $pers['id'] ?></td>
        <td><?php echo $pers['nom'] ?></td>
        <td><?php echo $pers['prenom'] ?></td>
        <td><?php echo $pers['email'] ?></td><td>
            <?php echo $pers['age'] ?></td>
            <td><a href="deletePersonne.php?id=<?php echo $pers['id']  ?>">Supprimer</a></td>
<td>
    <form method="POST" action="updatePersonne.php">
    <input type="hidden" name="id" value="<?php echo $pers['id']; ?>">
    <input type="submit" name="update" value="Update">
</form>

</td>
        </tr>
<?php } ?>
</body>
</html>