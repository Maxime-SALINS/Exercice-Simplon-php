<?php
session_start();
include 'includes/functions.php';
$title = "Connexion";
include 'includes/header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $utilisateur = connexion($pdo, $email, $mot_de_passe);
    if ($utilisateur) {
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['role'] = $utilisateur['role'];
        $_SESSION['nom'] = $utilisateur['nom'];


        if ($_SESSION['role'] === 'admin') {
            header('Location: admin/dashboard.php');
        } else {
            header('Location: index.php');
        }
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect.";
    }
}
if (isset($_SESSION['inscrit'])) {
    $message = $_SESSION['inscrit'];
    unset($_SESSION['inscrit']);
}
?>
<div class="container">
    <h1 class="mt-5">Connexion</h1>
    <?php if (!empty($message)) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <?php if (isset($erreur)) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $erreur; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>