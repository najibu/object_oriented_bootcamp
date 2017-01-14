<?php 

class Task {
  public $description;
  public $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task('Learn OOP');

$task->complete();

var_dump($task->completed);

class Math {
  public static function add(...$nums)
  {
    return array_sum($nums);
  } 
}

// echo Math::add(1,2,3,4);

class Person {
  public $age = 1;

  public function haveBirthday()
  {
    return  $age++;
  }

  public function age()
  {
    return $this->age;
  }
}

// $najibu = new Person;
// $najibu->haveBirthday();
// $najibu->haveBirthday();
 
// echo $najibu->age();

// $sham = new Person;
// $sham->haveBirthday();

// echo $sham->age();

class BankAccount {
  const TAX = .09;
}

echo BankAccount::TAX; 

interface Animal {
  public function communicate();
  
}

class Dog implements Animal {
  public function communicate()
  {
    return "Bark";
  }
}

class Cat implements Animal {
  public function communicate()
  {
    return "Meow";
  }
}