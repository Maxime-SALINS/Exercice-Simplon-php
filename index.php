<?php require_once './partials/header.php'?>
    <h1>Model de voiture</h1>
    <section class="card">
        <?php
            session_start();

            require_once 'card_template.php';

            foreach ($_SESSION['cars'] as $car) {
                echo cardTemplate($car);
            };           
        ?>
    </section>
    <!-- Exercice sur le formulaire de contact méthode GET & POST -->
    <!-- <section>
        <h2>Test methode POST/GET</h2>
        <div>
            <form action="userinfo.php" method="post">
                <input type="text" name="name" id="name" placeholder="VOTRE NOM">
                <input type="email" name="email" id="email" placeholder="VOTRE EMAIL">
                <input type="password" name="password" id="password" placeholder="MOT DE PASSE">
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </section> -->
</body>

</html>