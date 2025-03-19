<?php
require_once "connexion.php";

if (!empty($_POST) && isset($_FILES["file"])) {

    if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $nom = $_FILES["file"]["name"];
        $taille = $_FILES["file"]["size"];
        $type = $_FILES["file"]["type"];
        $bin = file_get_contents($_FILES["file"]["tmp_name"]);

        try {
           
            $sql = "INSERT INTO `images` (`nom`, `taille`, `type`, `bin`) VALUES (?, ?, ?, ?)";
            $requete = $db->prepare($sql);

           
            $requete->execute([$nom, $taille, $type, $bin]);

            echo "Image téléchargée et enregistrée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    } else {
        echo "Erreur lors du téléchargement du fichier.";
    }

    header("location:select.php");
}
?>
<?php
require_once "header.php";
?>
<form action="" method="post" enctype="multipart/form-data">
    <label for="file">Entrer une image</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Valider" name="envoyer">

</form>
</body>

</html>