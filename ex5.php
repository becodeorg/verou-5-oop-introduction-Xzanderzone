<?php

declare(strict_types=1);

//  EXERCISE 5

// Copy the class of exercise 1.
class Beverage
{
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
  public function DrinkInfo()
  {
    echo "This beverage is " . $this->temperature . " and " . $this->color;
  }
  public function setPrice(float $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    echo $this->price;
  }
}
//  Change the properties to private.
//  Fix the errors without using getter and setter functions.
//  Change the price to 3.5 euro and print it also on the screen on a new line.
$cola = new Beverage("black", 2);
$cola->setPrice(3.5);
echo $cola->getPrice() . "<br>";

//  print the getInfo on the screen.
//  Print the temperature on the screen.
$cola->DrinkInfo();