<?php

// echo phpinfo();
// die;

require_once "connexion.php";
if (!empty($_POST)) {
    $languages_str = "";
    $sexe = "";
    $passeTemps = "";
    if (isset($_POST['languages']) && is_array($_POST['languages'])) {



        $languages = $_POST['languages'];
        $languages_str = implode(",", $languages);
        // echo $languages_str;
    }
    if (isset($_POST['sexe'])) {
        // echo $_POST['sexe'];
        $sexe = $_POST['sexe'];
    }
    if (isset($_POST['passeTemps'])) {
        // echo $_POST['passeTempsFavoris'];
        $passeTemps = $_POST['passeTemps'];
    }
    $sql = "INSERT INTO  `avis2` (`checkbox`, `radio`, `select`) VALUES (:languages_str, :sexe, :passeTemps)";
    // echo "inserer avec successful";
    $requete = $db->prepare($sql);
    // $requete->bindValue(':languages_str', $languages_str, PDO::PARAM_STR);
    // $requete->bindValue(':sexe', $sexe, PDO::PARAM_STR);
    // $requete->bindValue(':passeTemps', $passeTemps, PDO::PARAM_STR);
    $result = $requete->execute(
        [
            "languages_str" => $languages_str,
            "sexe" => $sexe,
            "passeTemps" => $passeTemps
        ]
    );
    // $result = $requete->execute(["languages_str"=>$languages_str]);
    // $result = $requete->execute(["languages_str"=>$languages_str]);
    if (
        $result
    ) {
        // $requete->bindValue(':passeTemps', $passeTemps, PDO::PARAM_STR);
        var_dump($requete);
        echo "insertion avec successful";
    } else {

        echo "echec de l'insertion";
        print_r($requete->errorInfo());
    }
    // header("Location: affichage.php");
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
        <select name="passeTemps" id="">
            <option value="coder">coder</option>
            <option value="jouer_au_foot">jouer au foot</option>
            <option value="effectuer_des_recherches">effectuer des recherches</option>
        </select><br>
        <input type="submit" value="valider" name='valider'>


    </form>
</body>

</html>