<?php

require "connexion.php";

$sql = "SELECT * FROM `images`";
$requete = $db->prepare($sql);

$requete->execute();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once "header.php";
?>
<h1>listes de mes utilisateurs</h1>
<table border="2">
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>taille</th>
            <th>type</th>
            <th>images</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user["id"]) ?></td>
                <td><?php echo htmlspecialchars($user["nom"]) ?></td>
                <td><?php echo htmlspecialchars($user["taille"]) ?></td>
                <td><?php echo htmlspecialchars($user["type"]) ?></td>
                <td><img src="data:<?= htmlspecialchars($user['type']) ?>;base64,<?= base64_encode($user['bin']) ?>" alt=" image de <?= htmlspecialchars($user['nom']) ?>" width="100"></td>
            </tr>
        <?php endforeach;  ?>
    </tbody>
</table>
</body>