<?php
class Constructor
{
    public $name;
    public $color;
    public $weight;
    public function __construct($name,$color,$weight)
    {
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
        echo "the fruit name is {$this->name} and color is{$this->color} and weight is {$this->weight}";
    }



}
$apple=new Constructor("apple","red","50");
?>