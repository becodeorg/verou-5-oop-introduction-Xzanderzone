<?php

declare(strict_types=1);
class Beverage
{
  const barName = "Het Vervolg";
  // define($barName, 'Het Vervolg');
  private string $color;
  private float $price;
  private string $temperature;
  public function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;

  }
  //Make a getInfo function which returns "This beverage is <temperature> and <color>."
  public function getInfo()
  {
    echo "This beverage is " . $this->temperature . " and " . $this->color;
  }


  public function printBar()
  {
    return self::barName;
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
  public function printBarFromBeer()
  {
    return parent::barName;
  }

}
$duvel = new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
echo $duvel->getAlcoholPercentage() . "<br>";
//  EXERCISE 6

// Copy the classes of exercise 2.
//  Change the properties to private.

//  Make a const barname with the value 'Het Vervolg'.

//  Print the constant on the screen.
//  Create a function in beverage and use the constant.
echo $duvel->printBar();

//  Do the same in the beer class.
//  Print the output of these functions on the screen.
echo $duvel->printBarFromBeer();
