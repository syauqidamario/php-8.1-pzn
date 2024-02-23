<?php

//Union type is where properties/parameters could have multiple data types
//Intersection type is where properties/parameters that has to fit other data types

interface HasBrand
{
      function getBrand(): string;
}

interface HasName
{
      function getName(): string;
}

class Car implements HasBrand, HasName
{
      private string $brand;
      private string $name;

      public function __construct(string $brand, string $name)
      {
            $this->brand = $brand;
            $this->name = $name;
      }

      public function getBrand(): string
      {
            return $this->brand;
      }

      public function getName(): string
      {
            return $this->name;
      }
}

function printBrandAndName(HasBrand & HasName $value)
{
      echo $value->getBrand() . "-" . $value->getName() . PHP_EOL;
}

printBrandAndName(new Car("Toyota", "Avanza"));
printBrandAndName(new Car("Mercedes", "Nissan"));
