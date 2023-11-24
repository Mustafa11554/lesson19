<?php
abstract class Character {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    abstract public function getInfo();
}
class Warrior extends Character {
    protected $strength;

    public function __construct($name, $age, $strength) {
        parent::__construct($name, $age);
        $this->strength = $strength;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getInfo() {
        return "Warrior - Name: " . $this->getName() . ", Age: " . $this->getAge() . ", Strength: " . $this->getStrength();
    }
}

class Mage extends Character {
    protected $magicPower;

    public function __construct($name, $age, $magicPower) {
        parent::__construct($name, $age);
        $this->magicPower = $magicPower;
    }

    public function getMagicPower() {
        return $this->magicPower;
    }

    public function getInfo() {
        return "Mage - Name: " . $this->getName() . ", Age: " . $this->getAge() . ", Magic Power: " . $this->getMagicPower();
    }
}
$characters = array(
    new Warrior("Warrior1", 25, 100),
    new Mage("Mage1", 30, 150)
);
function printCharacterInfo($character) {
    echo $character->getInfo() . "<br>";
}
foreach ($characters as $character) {
    printCharacterInfo($character);
}
