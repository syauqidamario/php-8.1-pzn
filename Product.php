<?php

require_once __DIR__ . '/Category.php';

class Product
{
      public function __construct(public string $name, public Category $category = new Category("9", "Unknown"))
      {
      }
}

function printProduct(Product $product = new Product("Unknown"))
{
      echo $product->name . " " . $product->category->name . PHP_EOL;
}

printProduct();
printProduct(new Product("iPhone XR"));

// var_dump(new Product());
var_dump(new Product("iPhone XR"));
var_dump(new Product("iPhone XR", new Category("1", "Gawai")));
