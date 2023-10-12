<!-- Ajoutez le formulaire de suppression de compte ici -->
<form action="" method="post">
    <input type="hidden" name="datadelet" value="<?= $user['id']; ?>">
    <button id="delbutton" type="submit" name="formdeleteuser">Supprimer le compte</button>
</form>


<?php
if (isset($_POST['formdeleteuser']) && isset($_POST['datadelet'])) {
    $datadelet = $_POST['datadelet'];

    // Assurez-vous que votre requête SQL est correcte, en supprimant l'erreur de syntaxe
    $laQuestionEnSql = "DELETE FROM users WHERE id = :id";
    $stmt = $mysqli->prepare($laQuestionEnSql);
    $stmt->bind_param('i', $datadelet);

    if ($stmt->execute()) {
        // La suppression a réussi, vous pouvez rediriger ou afficher un message de confirmation
        header('Location: admin.php');
        $_SESSION['flash']['success'] = "Le compte a été supprimé";
        exit;
    } else {
        echo "Échec de la suppression : " . $stmt->error;
    }

    $stmt->close();
}
?>