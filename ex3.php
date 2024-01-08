<?php

declare(strict_types=1);
class Beverage
{
  private string $color;
  private float $price;
  private string $temperature;
  private function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;

  }
  //Make a getInfo function which returns "This beverage is <temperature> and <color>."
  private function getInfo()
  {
    echo "This beverage is " . $this->temperature . " and " . $this->color;
  }
}

// EXERCISE 2

//  Make class beer that extends from Beverage.
class Beer extends Beverage
{
  //  Create the properties name (string) and alcoholPercentage (float).
  private string $properties;
  private float $alcoholPercentage;

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
  //  Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
  public function beerInfo()
  {
    echo "Hi i'm Duvel and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.";
  }
}
//  Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
//  Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('blond', 3.5, 'cold', 'Duvel', 8.5);
//  Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
echo $duvel->getAlcoholPercentage() . "<br>";
// echo $duvel->alcoholPercentage . "<br>";
echo $duvel->color . "<br>";



//  EXERCISE 3

// Copy the code of exercise 2 to here and delete everything related to cola.
//  Make all properties private.
//  Make all the other prints work without error.

//  After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
$duvel->color = 'light';
echo $duvel->color . "<br>";
$duvel->beerInfo();