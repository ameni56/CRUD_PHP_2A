<?php
require_once __DIR__ . '/../../Controller/PersonneController.php';

$personneC = new PersonneController();
$error = '';
$personne = null;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
} elseif (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    echo "Aucun ID fourni.";
    exit();
}


$personne = $personneC->showPersonne($id);


if (
    isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['age'])
) {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) &&
        !empty($_POST['email']) && !empty($_POST['age'])
    ) {
        $p = new Personne(
            $id,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['age']
        );

        $personneC->updatePersonne($p, $id);
        header('Location: listPersonne.php');
        exit();
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une personne</title>
</head>
<body>
    <h2>Modifier une personne</h2>

    <?php if ($error) echo '<p style="color:red;">' . $error . '</p>'; ?>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label>Nom :</label><br>
        <input type="text" name="nom" value="<?php echo $personne['nom']; ?>"><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" value="<?php echo $personne['prenom']; ?>"><br>

        <label>Email :</label><br>
        <input type="text" name="email" value="<?php echo $personne['email']; ?>"><br>

        <label>Âge :</label><br>
        <input type="number" name="age" value="<?php echo $personne['age']; ?>"><br>

        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
