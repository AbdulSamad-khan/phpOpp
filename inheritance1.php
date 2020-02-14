<?php
class Person{
  protected $name;
  protected $age;

  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }
  public function display(){
      echo $this->name;
      echo $this->age;
  }
  public function getName(){
    return $this->name;
  }
}

// class Department extends Person{
//   public function __construct($name,$age){
//     parent::__construct($name,$age);
//   }
//   public function display1(){
//     echo $this->name;
//   }
// }
$obj = new Person('Abdul Samad', 21);

//$obj->display();
// $obj1 = new Department('Abdul Samad', 21);
// $obj1->display();
// $obj1->display1();
//echo $obj->name;
 ?>
