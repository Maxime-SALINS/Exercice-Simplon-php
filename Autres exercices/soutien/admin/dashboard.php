<?php
include '../includes/functions.php';
$title = "Dashboard";
include '../includes/header.php';



?>

<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location: connexion.php'); // Sécurité pour accès admin seulement
    exit();
}


$utilisateurs = selectUsers($pdo);
?>

<div class="container mt-5">
    <h2>Gestion des Utilisateurs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($utilisateurs as $utilisateur) : ?>
                <tr>
                    <td><?= htmlspecialchars($utilisateur['id']) ?></td>
                    <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
                    <td><?= htmlspecialchars($utilisateur['role']) ?></td>
                    <td>
                        <a href="modifierUtilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="supprimerUtilisateur.php?id=<?= $utilisateur['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include '../includes/footer.php';
?>