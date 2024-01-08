<?php

declare(strict_types=1);

//  EXERCISE 1
//  Create a class beverage.
//  Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
//  Have a default value "cold" in the construct for temperature.
class Beverage
{
  public string $color;
  public float $price;
  public string $temperature;
  public function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;

  }
  //Make a getInfo function which returns "This beverage is <temperature> and <color>."
  public function DrinkInfo()
  {
    echo "This beverage is " . $this->temperature . " and " . $this->color;
  }
}

//  Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
$cola = new Beverage("black", 2);
//  print the getInfo on the screen.
$cola->DrinkInfo();
//  Print the temperature on the screen.
echo ($cola->temperature);
// USE TYPEHINTING EVERYWHERE!
