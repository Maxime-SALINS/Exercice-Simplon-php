<?php require_once './partials/header.php' ?>
<section>
    <h2>Ajout model de voiture</h2>
    <div class="dispo_form">
        <?php
        require_once 'data.php';

        $marque = '';
        $sold = '';
        $warehouse = '';
        $img = '';
        $message = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //On gére en premier l'upload image
            $tmpName = $_FILES['image']['tmp_name'];
            $name = $_FILES['image']['name'];
            $full_path = $_FILES['image']['full_path'];
            $type = $_FILES['image']['type'];
            $error = $_FILES['image']['error'];
            $size = $_FILES['image']['size'];
            
            //Obtenir l'extension des images
            $imgExtension = explode('.', $name);
            $extension = strtolower(end($imgExtension));
            
            //Table des extensions autorisés
            $extensionValid = ['jpg', 'jpeg','gif','png','webp'];
            
            //Vérification de l'extension
            if (in_array($extension,$extensionValid) && $error == 0){
                move_uploaded_file($tmpName, './asset/images/' . $name);
            } else {
                echo "Mauvaise extension d'images";
            }

            //On gére dans un deuxième temps la récupération des infos du formulaire
            $model = $_POST["model"];
            $stock = intval($_POST["stock"]);
            $vendu = intval($_POST["vendu"]);
            $image = "asset/images/" . $name;
            // var_dump($image);
            
            //Script: Envoie vers la base de données
            if (empty($model) && empty($stock) && empty($vendu) && empty($image)) {
                $marque = $warehouse = $sold =  $img = '<span style="color:red">*Ce champ est obligatoire</span>';
                $message = "<span style='color:red'>Vous n'avez pas remplie tout les champs !</span>";
            } else if (!in_array($model, array_column($table, "model"))) {

            //On regroupe les nouvelles données dans un tableau
            $newdonnees = [
                $model,
                $stock,
                $vendu,
                $image
            ];

            //On utilise les requêtes préparées et des marqueurs nommés
            $reqprepare = $conn->prepare("INSERT INTO cars(`model`,`stock`,`vendu`,`image`) VALUES (?,?,?,?)");

            //On execute la requête
            $reqprepare->execute($newdonnees);

            //On se redirige vers la page index
            header('Location:index.php');

            // Autre méthode :
            // $sql = "INSERT INTO `cars`(`model`,`stock`,`vendu`,`image`) VALUES('$model', '$stock', '$vendu', '$image') ";
            // $requete = $conn->query($sql);

            } else {
                echo "Attention : le model existe déjà !";
            }
        }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input class="style_input" type="text" name="model" id="model" placeholder="Model">
            <?php echo $marque ?><br>
            <input class="style_input" type="number" name="stock" id="stock" placeholder="Stock">
            <?php echo $warehouse ?><br>
            <input class="style_input" type="number" name="vendu" id="vendu" placeholder="Vendu">
            <?php echo $sold ?><br>
            <input class="style_input" type="file" name="image" id="image">
            <?php echo $img ?><br>
            <button class="style_btn" type="submit">SUBMIT</button><br>
            <?php echo $message ?>
        </form>
    </div>
</section>