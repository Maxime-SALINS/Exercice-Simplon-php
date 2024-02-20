<?php require_once './partials/header.php'?>
<section>
<h2>Ajout model de voiture</h2>
<div class="dispo_form">
    <?php
    require_once 'data.php';

    function addId ($array){
        $newid = end($array)['id'] + 1;
        return $newid;
    };

    $marque ='';
    $sold = '';
    $warehouse = '';
    $img = '';
    $message = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // var_dump($_POST);

        $model = $_POST["model"];
        $stock = $_POST["stock"];
        $vendu = $_POST["vendu"];
        $image = $_POST["image"];

        if(empty($model) && empty($stock) && empty($vendu) && empty($image)){
            $marque = $warehouse = $sold =  $img ='<span style="color:red">*Ce champ est obligatoire</span>';
            $message = "<span style='color:red'>Vous n'avez pas remplie tout les champs !</span>";
        } else if(!in_array($model, array_column($table, "model"))){
            $req="INSERT INTO cars(model,stock,vendu)";
            header('Location:index.php');
        } else {
            echo "Attention : le model existe déjà !";
        }
    }
    ?>
    <form action="" method="post">
        <input class="style_input" type="text" name="model" id="model" placeholder="Model">
        <?php echo $marque?><br>
        <input class="style_input" type="number" name="stock" id="stock" placeholder="Stock">
        <?php echo $warehouse?><br>
        <input class="style_input" type="number" name="vendu" id="vendu" placeholder="Vendu">
        <?php echo $sold?><br>
        <input class="style_input" type="file" name="image" id="image">
        <?php echo $img?><br>
        <button class="style_btn" type="submit">SUBMIT</button><br>
        <?php echo $message?>
    </form>
</div>
</section>

