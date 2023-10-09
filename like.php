<?php
session_start();
$user_id = $_SESSION['user_id'];
$post_id = $_POST['post_id'];

include 'connexions2.php';

// Vérifier si l'utilisateur a déjà aimé le message
$stmt = $pdo->prepare('SELECT * FROM likes WHERE user_id = ? AND post_id = ?');
$stmt->execute([$user_id, $post_id]);
if ($stmt->rowCount() > 0) {
    // L'utilisateur a déjà aimé le message
    $modal = '<div class="modal"><div class="modal-content">Vous avez déjà aimé ce message.</div></div>';
    // Ajouter l'élément div à la page
    // echo $modal;
    // exit;
    header('Location: index.php');
    exit;
}
// Ajouter un like pour le message
$stmt = $pdo->prepare('INSERT INTO likes (user_id, post_id, created_at) VALUES ('.$user_id.', '.$post_id.', NOW())');
$stmt->execute([$user_id, $post_id]);

// Compter le nombre de likes pour le message
$stmt = $pdo->prepare('SELECT COUNT(*) FROM likes WHERE post_id = ?');
$stmt->execute([$post['id']]);
$like_count = $stmt->fetchColumn();

// Rediriger l'utilisateur vers la page d'accueil
header('Location: index.php');
exit;
?>