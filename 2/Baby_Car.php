<?php 
class Baby_Car extends Product{
    private $age;
    private $weight;
    private $materials = ["material 1","material 2","material 3"];
    private $matrial_index;
    public function __construct($name,$price,$descsription,$age,$weight,$matrial_index)
    {
        $this->name = $name;
        $this->price=$price;
        $this->description = $descsription;
        $this->age = $age;
        $this->weight = $weight;
        $this->matrial_index = $matrial_index;

    }
    public function get_details()
    {
       echo $this->name."<br>";
       echo $this->price."<br>";
       echo $this->description."<br>";
       echo $this->age . "<br>";
       echo $this->weight . "<br>";
       echo $this->materials[$this->matrial_index];
    }
}