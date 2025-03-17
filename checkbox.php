<?php
if (!empty($_POST)) {
    if (!empty($_POST['languages'])) {
        $languages = $_POST['languages'];
        $languages_str = implode(",", $languages);

        $sql = "INSERT INTO `users` (languages) VALUES(:languages)";
        $requete = $db->prepare($sql);
        $requete->bindValue(':languages', $languages);
        $requete->execute();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="post">
        <P>quelle langage de programmation prefere vous?</P>
        <label for="">php
            <input type="checkbox" name="languages[]" id="" value="">
        </label>
        <label for="">Laravel
            <input type="checkbox" name="languages[]" id="" value="">
        </label>
        <input type="checkbox" name="languages[]" id="" value="">
        <label for="">python
        </label>
        <input type="checkbox" name="languages[]" id="" value="">
        
        
        <p>Quelle est votre sexe?</p>
        <label for="maxculin">Maxculin</label>
        <input type="radio" name="sexe" id="maxculin">
        <label for="feminin">feminin</label>
        <input type="radio" name="sexe" id="feminin">
        <input type="submit" value="valider" name='valider'>
    </form>
</body>

</html>