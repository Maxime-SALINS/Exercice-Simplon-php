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

$valueFilterSold = $_POST['filter_1'];
$valueFilterStock = $_POST['filter_2'];

// var_dump(valueValid($valueFilterSold));
var_dump(valueValid($valueFilterStock));

if (valueValid($valueFilterSold)){
    echo "je trie les ventes";
} else {
    echo "Je ne fais rien";
}


