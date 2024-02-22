<?php

class Category
{
      public function __construct(public readonly string $id, public readonly string $name)
      {
      }
}

$category = new Category("1", "Gawai");
$category = new Category("2", "Elektronik");
var_dump($category->id);
