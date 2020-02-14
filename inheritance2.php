<?php
class Person{
  public $name;
  public $age;
  public $gender;
  //
  // public function __construct($name,$age,$gender){
  //   $this->name = $name;
  //   $this->age = $age;
  //   $this->gender = $gender;
  // }
  public function setName($name){
    $this->name = $name;
  }
  public function setAge($age){
    $this->age = $age;
  }
  public function setGender($gender){
    $this->gender = $gender;
  }
  public function getName(){
    return $this->name;
  }
  public function getAge(){
    return $this->age;
  }
  public function getGender(){
    return $this->gender;
  }
}
class Department extends Person{
  // public function __construct(){
  //
  // }
  public function getEmpName(){
    return $this->getName();
  }
}
// $per = new Person("Abdul Samad",21,'Male');
// echo $per->getName();
// echo $per->getAge();
// echo $per->getGender();
// $dept = new Department;
// echo $dept->getPerDep();
$per = new Person;
$per->setName('Abdul samad');
$per->setAge(21);
$per->setGender('Male');
echo $per->getName();
echo $per->getAge();
echo $per->getGender();
$dep = new Department();
echo $dep->getEmpName();

 ?>
