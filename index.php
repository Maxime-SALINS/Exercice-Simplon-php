<?php require_once './partials/header.php' ?>
<?php

require_once 'data.php';

if (isset($_POST['filter_1'])) {
    $value = $_POST['filter_1'];
    if ($value == 'on') {
        $reponse = $conn->query('SELECT * FROM cars ORDER BY vendu DESC LIMIT 5');
        $table = $reponse->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($table);
    }
}

if (isset($_POST['filter_2'])) {
    $value = $_POST['filter_2'];
    if ($value == 'on') {
        $reponse = $conn->query('SELECT * FROM cars ORDER BY stock DESC LIMIT 5');
        $table = $reponse->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (isset($_POST['filter_3'])) {
    $value = $_POST['filter_3'];
    if ($value == 'on') {
        $reponse = $conn->query('SELECT * FROM cars WHERE vendu  BETWEEN 10 AND 20');
        $table = $reponse->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (isset($_POST['filter_4'])) {
    $value = $_POST['filter_4'];
    if ($value == 'on') {
        $reponse = $conn->query('SELECT * FROM cars WHERE stock  BETWEEN 25 AND 50');
        $table = $reponse->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
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
                <div class="style_filter">
                    <input type="checkbox" name="filter_3" id="filter_3">
                    <label for="vendu">Vente entre 10 et 20</label>
                </div>
                <div class="style_filter">
                    <input type="checkbox" name="filter_4" id="filter_4">
                    <label for="stock">Stock entre 25 et 50</label>
                </div>
                <button type="submit">Filtrer</button>
            </form>
        </div>
    </aside>   
    <section class="style_section">
        <h2>Model de voiture</h2>
        <div class="card">
            <?php
            require_once 'card_template.php';

            // var_dump($table);
    
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