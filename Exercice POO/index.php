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

// class User
// {
//     public $name;
//     public $age;
//     public $avatar;

//     public function choixAvatar($param)
//     {
//         $table = ['😊', '😒', '😎', '🙄'];
//         $this->avatar = $table[$param];
//     }

//     public function tchater($message)
//     {
//         echo "- $this->avatar | $this->name : $message <br>";
//     }

//     public function viellir($param)
//     {
//         if($this -> age > 120) {
//             echo "Wow ! à $this->age il est temps de crever $this->name !";
//         } else {
//             $this->age += $param;
//         }
//     }
// }

// //Michel
// $michel = new User();
// $michel->age = 54;
// $michel->name = "Michel";
// $michel->choixAvatar(2);

// //David
// $david = new User();
// $david->age = 26;
// $david->name = "David";
// $david->choixAvatar(1);

// //Zack
// $zack = new User();
// $zack->age = 25;
// $zack->name = "Zack";
// $zack->choixAvatar(0);

// //Samy
// $samy = new User();
// $samy->age = 30;
// $samy->name = "Samy";
// $samy->choixAvatar(3);

// //tchat

// $michel->tchater("Salut la compagnie !");
// $david->tchater("Shalom sha va !");
// $zack->tchater("Salam, ça va, David Bordus ?");
// $samy->tchater("Qu'est ce que je fou la moi !");

// echo $zack->age . " ans <br>";

// $zack->viellir(10);
// $zack->viellir(100);
// $zack->viellir(200);

class User
{
    public $fname;
    public $lname;
    private $age;
    public $avatar;
    public $gender;

    function __construct($fn, $ln, $age, $av, $G)
    {
        $this->fname = $fn;
        $this->lname = $ln;
        $this->setAge($age);
        $this->avatar = $av;
        $this->gender = $G;
    }

    public function setAge($userAge)
    {
        if (is_int($userAge) && $userAge >= 18 && $userAge < 75) {
            $this->age = $userAge;
        } else {
            throw new Exception("L'age n'est pas correct !");
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User("Michel","Seguin", 70, "😊", "M");

var_dump($user);