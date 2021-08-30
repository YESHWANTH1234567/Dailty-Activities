<?php
class Student{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
        echo "parent";
    }
    protected function intro()
    {
        echo "The Student name is {$this->name} and age is {$this->age} <br>";
    }
}
class Student1 extends Student
{
   
    function message()
    {
        echo "This function will call the intro function <br>";
        $this->intro();
    }
}
$saravanan=new Student1("saravanan",24);
$saravanan->message();
?>