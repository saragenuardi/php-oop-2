<?php

class Person
{
   public $name;
   public $last_name;
   public $age;

   public function __construct($name, $last_name, $age)
   {
      $this->name = $name;
      $this->last_name = $last_name;
      $this->age = $age;
   }


}