<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice | php</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Exercice php</h1>
    <section class="card">
        <?php require("boucle.php");?>
        <?php
        session_start();
        echo $_SESSION['cars'];?>
    </section>
    <!-- Exercice sur le formulaire de contact méthode GET & POST -->
    <section>
        <h2>Test methode POST/GET</h2>
        <div>
            <form action="userinfo.php" method="post">
                <input type="text" name="name" id="name" placeholder="VOTRE NOM">
                <input type="email" name="email" id="email" placeholder="VOTRE EMAIL">
                <input type="password" name="password" id="password" placeholder="MOT DE PASSE">
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </section>
    <section>
        <h2>Ajout model de voiture</h2>
        <div>
            <form action="index.php" method="post">
                <input type="text" name="id" id="id" placeholder="ID">
                <input type="text" name="model" id="model" placeholder="Model">
                <input type="text" name="stock" id="stock" placeholder="Stock">
                <input type="text" name="vendu" id="vendu" placeholder="Vendu">
                <input type="url" name="image" id="image" placeholder="lien image">
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </section>
</body>
</html>