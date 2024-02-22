<?php

require_once 'data.php';

//Récupération de la validité des input checkbox
function valueValid($value){
    if ($value == 'on') {
        return TRUE;
    } else {
        return FALSE;
    }
}

//On recupère 
$valueFilterSold = $_POST['filter_1'];
$valueFilterStock = $_POST['filter_2'];

// var_dump(valueValid($valueFilterSold));
// var_dump(valueValid($valueFilterStock));

if (valueValid($valueFilterSold)){
    $req = $conn->prepare("SELECT * FROM cars ORDER BY vendu DESC");
    $req->execute();
    $table = $req->fetchAll(PDO::FETCH_ASSOC);
    var_dump($table);
} else {
    echo "Je ne fais rien";
}

if (valueValid($valueFilterStock)){
    $req = $conn->prepare("SELECT * FROM cars ORDER BY stock DESC");
    $req->execute();
    $table = $req->fetchAll(PDO::FETCH_ASSOC);
    var_dump($table);
} else {
    echo "Je ne fais rien";
}


