<?php
class Student{
    private $name ="Jack";
    public function setName($newName){
         $this->name = $newName;
    }
    public function getName(){
        return $this -> name."<br/>";
    }

 
    
}

$obj = new Student();
$obj->setName ('peter');
$obj->getname();

echo $obj->getname();



?>
