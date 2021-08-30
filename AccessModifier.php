<?php
class Company
{
    public $name;
    protected $place;
    private $type;
    function __construct($name,$place,$type)
    {
        $this->name=$name;
        $this->place=$place;
        $this->type=$type;
      
    }
    function getValue()
    {
        return $this->place;
    }
  

}
$clarity =new Company("clarity","karapakkam","Travel");
$place=$clarity->getValue();
echo $place."<br>";
echo $clarity->name;



?>