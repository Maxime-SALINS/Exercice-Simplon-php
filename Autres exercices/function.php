<?php

//creer une function présentation qui prend 3 paramettre

//1er : prenom
//2eme : age
//3eme : ville de naissance

//Je m'appelle David et j'ai 29 ans et je de Marseille

function userInfo($premon , $age , $ville){
    echo "Je m'appelle " . $premon . " et j'ai " . $age . " ans et je viens de " . $ville;
}

userInfo("Maxime",26,"Marseille");

echo "<br>";
echo "<br>";

function addition($n1 , $n2){
    return $n1 + $n2;
};

$result = addition(3,4);
echo $result;

echo "<br>";
echo "<br>";

function calcul($n1 , $n2){
    $addition = $n1 + $n2;
    $soustraction = $n1 - $n2;
    $produit = $n1 * $n2;
    echo "la somme est: $addition , la soustraction est : $soustraction , le produit est : $produit";
};

calcul(3,4);

echo "<br>";
echo "<br>";

$compteur =0;

function incrementation(){
    global $compteur;
    $compteur++;
    echo $compteur;
};

incrementation();
incrementation();
incrementation();
incrementation();
incrementation();
incrementation();
incrementation();
incrementation();
incrementation();

echo "<br>";
echo "<br>";

$nom= "Maxime";

function salutation($arg1){
    echo isset($arg1) ? "Bonjour, $arg1 !" : "Bonjour, [nom] !";
};

salutation($nom);

echo "<br>";
echo "<br>";

function division($n1 , $n2){
    if ($n2 == 0) {
        echo "zero n'est pas divisible";
    } else {
        $division = $n1 / $n2;
        echo $division;
    }
    
};

division(125 , 5);