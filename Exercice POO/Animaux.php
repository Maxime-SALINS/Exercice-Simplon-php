<?php

// 1 ere etape

// Créez une classe Animal avec les propriétés suivantes :

// $nom : le nom de l'animal
// $age : l'âge de l'animal
// Ajoutez des "méthodes" 
//         pour "définir" ==> SETTER et 
//              "obtenir" ==> GETTER
// le nom et l'âge de l'animal.


// 2 eme etape

// Étendez la classe Animal pour créer deux sous-classes :
//  Chien et Chat. 
//  Chaque sous-classe doit avoir une méthode spécifique, par exemple :

// Pour la classe Chien : une méthode aboyer().
// Pour la classe Chat : une méthode ronronner().

// "Instanciez" ==> NEW  des objets Chien et Chat, définissez leurs noms et âges, puis appelez leurs méthodes spécifiques.

class Animal{

    private $name;
    private $age;

    //Constructeur
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    //Méthode SET
    public function setName($Name){
        $this->name = $Name;
    }

    public function setAge($Age){
        $this->age = $Age; 
    }

    //Méthode GET
    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

}

class Chien extends Animal{

    public function aboyer(){
        echo "Le chien qui s'appel {$this->getName()} et qui a {$this->getAge()} ans est entrain d'aboyer ! <br>";
    }
}

class Chat extends Animal{

    public function ronronner(){
        echo "le chat qui s'appel {$this->getName()} et qui a {$this->getAge()} ans est entrain de ronronner ! <br>";
    }
}

$chien = new Chien("Picxou", 10);
$chat = new Chat("Lily", 3);

$chien->aboyer();
$chat->ronronner();