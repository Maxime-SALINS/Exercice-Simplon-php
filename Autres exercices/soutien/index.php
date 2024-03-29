<?php
include 'includes/functions.php';
$title = "Accueil";
include 'includes/header.php';
session_start();
?>

<div class="container">
    <?php if (!empty($_SESSION["id"])) : ?>
        <h1 class="mt-5">Bienvenue <strong><?php echo ucfirst($_SESSION["nom"]) ?></strong> dans le soutien du 29 mars 2024</h1>
        <div class="row">
            <?php if ($_SESSION["role"] == "admin") : ?>
                <div class="col-md-4">
                    <a href="admin/dashboard.php" class="btn btn-secondary">Admin</a>
                </div>
            <?php endif; ?>
            <div class="col-md-4">
                <a href="deco.php" class="btn btn-dark">Déconnexion</a>
            </div>
        </div>
    <?php else : ?>
        <h1 class="mt-5">Bienvenue dans le soutien du 29 mars 2024></h1>
        <p class="lead">Veuillez vous connecter ou vous inscrire pour accéder au contenu.</p>
        <div class="row">

            <div class="col-md-4">
                <a href="inscription.php" class="btn btn-primary">Inscription</a>
            </div>

            <div class="col-md-4">
                <a href="connexion.php" class="btn btn-success">Connexion</a>
            </div>
        <?php endif; ?>

        </div>
</div>

<?php include 'includes/footer.php'; ?>