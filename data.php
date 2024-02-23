<?php

require_once 'connection.php';

$reponse = $conn->query('SELECT * FROM cars');
$table = $reponse->fetchAll(PDO::FETCH_ASSOC);