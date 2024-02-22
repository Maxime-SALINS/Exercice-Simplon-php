<?php require_once './partials/header.php' ?>
<div class="dispo_sectionacide">
    <aside class="style_aside">
        <h2>Filtre</h2>
        <div class="style_form_aside">
            <form action="" method="post">
                <div class="style_filter">
                    <input type="checkbox" name="filter_1" id="filter_1">
                    <label for="vendu">Les plus vendus</label>
                </div>
                <div class="style_filter">
                    <input type="checkbox" name="filter_2" id="filter_2">
                    <label for="stock">Le plus de stock</label>
                </div>
                <button type="submit">Filtrer</button>
            </form>
        </div>
    </aside>   
    <section class="style_section">
        <h2>Model de voiture</h2>
        <div class="card">
            <?php
            require_once 'data.php';
            require_once 'card_template.php';
    
            foreach ($table as $car) {
                echo cardTemplate($car);
            };
            ?>
        </div>
    </section>
</div>
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