<?php
class Student
{
    public $name;
    public $year;
    public $college;

    public function setName($name,$year,$college)
    {
        $this->name=$name;
        $this->setYear($year);
        $this->setCollege($college);
    }
    protected function setYear($year)
    {
        $this->year=$year;
    }
    private function setCollege($college)
    {
        $this->college=$college;
    }
}
$saravanan= new Student();
$saravanan->setName("saravanan",3,"unknown");
echo "$saravanan->name, $saravanan->year,     $saravanan->college";
