<?php
// if (!empty($_POST)) {
//     if (!empty($_POST['languages'])) {
//         $languages = $_POST['languages'];
//         $languages_str = implode(",", $languages);

//         $sql = "INSERT INTO `users` (languages) VALUES(:languages)";
//         $requete = $db->prepare($sql);
//         $requete->bindValue(':languages', $languages);
//         $requete->execute();
//     }
// }
require_once "connexion.php";
if (!empty($_POST)) {
    if (isset($_POST['languages'])) {
        // $languages = $_POST['languages'];
        // $languages_str = implode("/", $languages);

        // $sql = "INSERT INTO avis (checkbox) VALUES(:checkbox)";
        // $requete = $db->prepare($sql);
        // $requete->bindValue(':checkbox', $languages_str, PDO::PARAM_STR_CHAR);
        // $requete->execute();



        $languages = $_POST['languages'];
        $languages_str = implode(",", $languages);
        echo $languages_str;
    }
    if (isset($_POST['sexe'])) {
        echo $_POST['sexe'];
    }
    if (isset($_POST['passeTempsFavoris'])) {
        echo $_POST['passeTempsFavoris'];
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
    <form method="post">
        <P>quelle langage de programmation prefere vous?</P>
        <div class="checkbox">
            <label for="php">php
            </label>
            <input type="checkbox" name="languages[]" id="php" value="Php">
            <label for="laravel">Laravel
            </label>
            <input type="checkbox" name="languages[]" id="laravel" value="Laravel">
            <label for="python">python
            </label>
            <input type="checkbox" name="languages[]" id="python" value="python">

        </div>

        <p>Quelle est votre sexe?</p>
        <div class="radio">
            <label for="maxculin">Maxculin</label>
            <input type="radio" name="sexe" id="maxculin" value="maxculin">
            <label for="feminin">feminin</label>
            <input type="radio" name="sexe" id="feminin" value="feminin">
        </div>

        <p>Quelle est votre passe temps favoris?</p>
        <select name="passeTempsFavoris" id="">
            <option value="coder">coder</option>
            <option value="jouer au foot">jouer au foot</option>
            <option value="effectuer-des-recherches">effectuer des recherches</option>
        </select>
        <input type="submit" value="valider" name='valider'>


    </form>
</body>

</html>