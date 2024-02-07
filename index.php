<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | php</title>
</head>
<body>
    <h1>Exercice php</h1>
    <section>
        <h2>Exercice sur les fonctions</h2>
        <?php require("boucle.php")?>
    </section>
    <!-- Exercice sur le formulaire de contact méthode GET & POST -->
    <form action="userinfo.php" method="post">
        <input type="text" name="name" id="name" placeholder="VOTRE NOM">
        <input type="email" name="email" id="email" placeholder="VOTRE EMAIL">
        <input type="password" name="password" id="password" placeholder="MOT DE PASSE">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>