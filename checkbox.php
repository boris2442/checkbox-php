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
    <title>Document</title>
</head>

<body>
    <form action="post">
        <P>quelle langage de programmation prefere vous?</P>
        <input type="checkbox" name="languages[]" id="" value="javascript">
        <input type="checkbox" name="languages[]" id="" value="php">
        <input type="checkbox" name="languages[]" id="" value="Laravel">
        <input type="checkbox" name="languages[]" id="" value="Lpython">
        <input type="submit" value="valider" name='valider'>
    </form>
</body>

</html>