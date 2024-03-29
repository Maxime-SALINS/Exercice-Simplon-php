<?php
session_start();
include 'includes/functions.php';
$title = "Inscription";
include 'includes/header.php';
require_once 'includes/db.php';

$result  = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];


    $result  = inscription($pdo, $nom, $email, $mot_de_passe);

    if ($result['success']) {
        $_SESSION["inscrit"] = $result['message'];
        header('Location: connexion.php');
        exit();
    } else {
        $message = $result['message'];
    }
}
?>

<div class="container">
    <h1 class="mt-5">Inscription</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <?php if (!empty($message)) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de passe :</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>

</div>

<?php include 'includes/footer.php'; ?>