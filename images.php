<?php
require_once "connexion.php";
if (!empty($_POST)) {
    $sql = "INSERT INTO `images` ( `nom`,`taille`, `type`, `bin`) VALUES(?,?,?,?,?)";
    $requete = $db->prepare($sql);
    $requete->execute(array($_FILES["file"]["name"], $_FILES["file"]["size"], $_FILES["type"], file_get_contents($_FILES["file"]["tmp_name"])));
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>images</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Entrer une image</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Valider" name="envoyer">










    </form>
</body>

</html>