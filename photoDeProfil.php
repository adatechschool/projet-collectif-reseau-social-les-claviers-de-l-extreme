<?php
echo "<div class = 'cropped'>";
$laQuestionEnSql = "SELECT * FROM users WHERE id= '$user_id'";
$lesInformations = $mysqli->query($laQuestionEnSql);
$reponse = $lesInformations->fetch_assoc();

if ($reponse['photo'] != "0") {
    echo "<img src='" . $user['photo'] . "'/>";
} else {
    echo "<img src='Images\Aleatoire.jpg'/>";
}
echo "</div>"
?>