<?php

// $obj = (object) array("text" => "bonjour");

// var_dump($obj);

// var_dump(get_declared_classes());

// class Ballon {

//     public $marque;
//     public $sport;

//     function lancer(){
//         echo "Vous avez lancer le ballon";
//     }
// }

// $ballonfoot = new Ballon();

// $ballonfoot -> marque = "Nike";
// $ballonfoot -> sport = "foot";

// var_dump($ballonfoot);

class User
{
    public $name;
    public $age;
    public $avatar;

    public function choixAvatar($param)
    {
        $table = ['😊', '😒', '😎', '🙄'];
        $this -> avatar = $table[$param];
    }

    public function tchater($message)
    {
        echo "- $this -> avatar | $this -> name : $message \n";
    }

    public function viellir($param)
    {
        $this->age = $this->age + $param;
        echo "Wow ! à $this->age il est temps de crever $this->name !";
    }
}

//Michel
$michel = new User();
$michel->age = 54;
$michel->name = "Michel";
$michel->choixAvatar(2);

//David
$david = new User();
$david->age = 26;
$david->name = "David";
$david->choixAvatar(1);

//Zack
$zack = new User();
$zack->age = 25;
$zack->name = "Zack";
$zack->choixAvatar(0);
//Samy
$samy = new User();
$samy->age = 30;
$samy->name = "Samy";
$samy->choixAvatar(3);

//tchat

$michel->tchater("Salut la compagnie !");
$david->tchater("Shalom sha va !");
$zack->tchater("Salam, ça va, David Bordus ?");
$samy->tchater("Qu'est ce que je fou la moi !");

echo $zack->age . " ans \n";

$zack->viellir(10);
