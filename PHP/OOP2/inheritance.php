<?php 

//di kunci
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    protected function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
      $this->intro();
    }
  }
  
  // Try to call all three methods from outside class
  $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
  $strawberry->message();//kuncinya di buka dengan this didalam function massage
  