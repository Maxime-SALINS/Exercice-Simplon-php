<?php require_once './partials/header.php'?>
<section>
<h2>Ajout model de voiture</h2>
<div>
    <form action="index.php" method="post">
        <input type="text" name="model" id="model" placeholder="Model">
        <input type="number" name="stock" id="stock" placeholder="Stock">
        <input type="number" name="vendu" id="vendu" placeholder="Vendu">
        <input type="url" name="image" id="image" placeholder="lien image">
        <button type="submit">SUBMIT</button>
    </form>
</div>
</section>

