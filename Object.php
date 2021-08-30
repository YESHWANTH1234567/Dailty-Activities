<?php
class Fruit
{
    public $name;
    public $color;

    public function setName($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function getName()
    {
        return $this->name;
    }
}
$fruit=new Fruit();
$fruit->name="straberry";
$name=$fruit->getName();

echo $name;
?>
