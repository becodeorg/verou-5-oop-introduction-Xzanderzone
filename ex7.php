<?php

declare(strict_types=1);
class Beverage
{
  const barName = "Het Vervolg";
  static $address = "Melkmarkt 9, 2000 Antwerpen";
  private string $color;
  private float $price;
  private string $temperature;
  public function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;

  }
  public function getInfo()
  {
    echo "This beverage is " . $this->temperature . " and " . $this->color;
  }


  public function printBar()
  {
    return self::barName;
  }
  public static function getAddress()
  {
    return Beverage::$address;
  }
}

class Beer extends Beverage
{
  private string $properties;
  private float $alcoholPercentage;

  public function __construct(string $color, float $price, string $temperature = 'cold', string $properties, float $alcoholPercentage)
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
    $this->properties = $properties;
    $this->alcoholPercentage = $alcoholPercentage;
  }
  public function getAlcoholPercentage()
  {
    echo $this->alcoholPercentage;
  }

}
$duvel = new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
echo $duvel->getAlcoholPercentage() . "<br>";
echo $duvel->printBar() . '<br>';
/* EXERCISE 7

Copy your solution from exercise 6

 Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".

 Print the address without creating a new instant of the beverage class 2 times in two different ways.
*/
echo $duvel->getAddress() . '<br>';
echo Beverage::$address;