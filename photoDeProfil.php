<?php
echo "<div class = 'cropped'>";
$laQuestionEnSql = "SELECT * FROM users WHERE id= '$user_id'";
$lesInformations = $mysqli->query($laQuestionEnSql);
$reponse = $lesInformations->fetch_assoc();

if ($reponse['photo'] != "0") {
    echo "<img src='" . $user['photo'] . "'/>";
    print ("c'est bon !");
} else {
    echo "<img src='Images\Aleatoire.jpg'/>";
    print ("c'est pas bon !");
}
echo "</div>"
?>