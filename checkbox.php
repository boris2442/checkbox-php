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
        <div class="checkbox">
        <label for="php">php
        </label>
        <input type="checkbox" name="languages[]" id="php" value="">
        <label for="laravel">Laravel
        </label>
        <input type="checkbox" name="languages[]" id="laravel" value="">
        <label for="python">python
        </label>
        <input type="checkbox" name="languages[]" id="python" value="">
     
        </div>

        <p>Quelle est votre sexe?</p>
        <div class="radio">
        <label for="maxculin">Maxculin</label>
        <input type="radio" name="sexe" id="maxculin">
        <label for="feminin">feminin</label>
        <input type="radio" name="sexe" id="feminin">
        </div>
        <input type="submit" value="valider" name='valider'>


    </form>
</body>

</html>