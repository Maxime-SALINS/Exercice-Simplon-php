<?php require_once './partials/header.php' ?>
<?php

require_once 'data.php';

function reqFilter($arrayPost, $bdd, $column,$array){
    $value = $arrayPost;
    if ($value == $column){
        $reponse = $bdd->query("SELECT * FROM cars ORDER BY $column DESC LIMIT 5");
        // var_dump($reponse);
        $array = $reponse->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($array);
        return $array;
    }
}

function reqFilterNumber($arrayPost, $bdd, $column,$array,$param1,$param2){
    $value = $arrayPost;
    if ($value == $column) {
        $reponse = $bdd->query("SELECT * FROM cars WHERE $column  BETWEEN $param1 AND $param2");
        $array = $reponse->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
}

if (isset($_POST['filter_1'])){
    $vendu = $_POST['filter_1'];
    $table= reqFilter($vendu,$conn,$vendu,$table);
}

if (isset($_POST['filter_2'])){
    $stock = $_POST['filter_2'];
    $table= reqFilter($stock,$conn,$stock,$table);
}

if (isset($_POST['filter_3'])) {
    $vendu = $_POST['filter_3'];
    $number1 = 10;
    $number2 = 20;
    $table = reqFilterNumber($vendu,$conn,$vendu,$table,$number1,$number2);
}

if (isset($_POST['filter_4'])) {
    $stock = $_POST['filter_4'];
    $number1 = 25;
    $number2 = 50;
    $table = reqFilterNumber($stock,$conn,$stock,$table,$number1,$number2);
}

?>
<div class="dispo_sectionacide">
    <aside class="style_aside">
        <h2>Filtre</h2>
        <div class="style_form_aside">
            <form action="" method="post">
                <div class="style_filter">
                    <input type="checkbox" name="filter_1" id="filter_1" value="vendu">
                    <label for="vendu">Les plus vendus</label>
                </div>
                <div class="style_filter">
                    <input type="checkbox" name="filter_2" id="filter_2" value="stock">
                    <label for="stock">Le plus de stock</label>
                </div>
                <div class="style_filter">
                    <input type="checkbox" name="filter_3" id="filter_3" value="vendu">
                    <label for="vendu">Vente entre 10 et 20</label>
                </div>
                <div class="style_filter">
                    <input type="checkbox" name="filter_4" id="filter_4" value="stock">
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