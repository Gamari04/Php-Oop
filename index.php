<?php
require __DIR__ .'../config/connection.php';

class Car
{
  private $brand;
  private $color;

  public function __construct($marque,$couleur)
  {
     $this->brand=$marque;
     $this->color=$couleur;
  }


}

$car1=new Car("fiat","black");
var_dump($car1);

?>
