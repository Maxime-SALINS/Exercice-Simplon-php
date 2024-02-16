<?php require_once './partials/header.php'?>
    <h1>Model de voiture</h1>
    <section class="card">
        <?php
            session_start();
            // var_dump($_SESSION['cars']);
            function addId ($array){
                $newid = end($array)['id'] + 1;
                return $newid;
            };

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $model = $_POST["model"];
                $stock = $_POST["stock"];
                $vendu = $_POST["vendu"];
                $image = $_POST["image"];

                if(!empty($model) && !empty($stock) && !empty($vendu) && !empty($image)){
                    if(!in_array($model, array_column($_SESSION['cars'], "model"))){
                        $id = addId($_SESSION['cars']);
                        $newCar = array("id" => $id, "model" => $model, "stock" => $stock, "vendu" => $vendu, "image" => $image);
                        array_push($_SESSION['cars'], $newCar);
                    } else {
                        echo "Attention : le model existe déjà !";
                    }
                } else {
                    echo "Vous n'avez pas remplie tout les champs <br>";
                }
            };

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