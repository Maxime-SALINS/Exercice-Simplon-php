<?php require_once './partials/header.php'?>
<section>
<h2>Ajout model de voiture</h2>
<div>
    <form action="index.php" method="post">
        <input type="text" name="model" id="model" placeholder="Model">
        <span style="color:red">*Ce champ est obligatoire</span><br>
        <input type="number" name="stock" id="stock" placeholder="Stock">
        <span style="color:red">*Ce champ est obligatoire</span><br>
        <input type="number" name="vendu" id="vendu" placeholder="Vendu">
        <span style="color:red">*Ce champ est obligatoire</span><br>
        <input type="file" name="image" id="image">
        <span style="color:red">*Ce champ est obligatoire</span><br>
        <button type="submit">SUBMIT</button>
    </form>
</div>
</section>

