<?php
class Character
{
public int $health;
public int   $stat;

public function __construct($health, $stat)
{
$this->health = $health;
$this->stat = $stat;
}
public function getHealth()
{
    return $this->health;
}
public function getStat()
{
    return $this->stat;
}
}
class Boss extends Character
{
public function __construct($health, $stat)
{
    parent::__construct($health, $stat);
}
public function getHealth() {
    return $this->health * 10;
    }
    
    public function getStat() {
    return $this->stat * 10;
    }
}
$boss = new Boss(100,50);
echo "Значение здоровья: "  . $boss->getHealth() . "<br>";
echo "Значение статистики: " . $boss->getStat();