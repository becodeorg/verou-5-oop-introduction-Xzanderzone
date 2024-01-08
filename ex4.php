<?php

declare(strict_types=1);
class Beverage
{
  protected string $color;
  protected float $price;
  protected string $temperature;
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
}

// EXERCISE 2

//  Make class beer that extends from Beverage.
class Beer extends Beverage
{
  //  Create the properties name (string) and alcoholPercentage (float).
  protected string $properties;
  protected float $alcoholPercentage;

  //  Foresee a construct that's allows us to use all the properties from beverage and 
  //that sets the values for name and alcoholpercentage.
  public function __construct(string $color, float $price, string $temperature = 'cold', string $properties, float $alcoholPercentage)
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
    $this->properties = $properties;
    $this->alcoholPercentage = $alcoholPercentage;
  }
  //  Make a getAlcoholPercentage function which returns the alocoholPercentage.
  public function getAlcoholPercentage()
  {
    echo $this->alcoholPercentage;
  }
}
//  Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
//  Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
//  Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
echo $duvel->getAlcoholPercentage() . "<br>";
echo $duvel->getInfo() . "<br>";
// echo $duvel->alcoholPercentage . "<br>";
// echo $duvel->color . "<br>";




/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

 Make all properties protected.
 Make all the other prints work without error without changing the beverage class.

*/