<?php
class Book extends Product{
    private  $publishers = ["pub1","pub2","pub3","pub4"];
    private $writer;
    private $color;
    private $supplier;
    public function __construct($name,$price,$descsription,$writer,$color,$supplier)
    {
        $this->name = $name;
        $this->price=$price;
        $this->description = $descsription;
        $this->writer = $writer;
        $this->color = $color;
        $this->supplier = $supplier;
        

    }
    public function get_details()
    {
       echo $this->name."<br>";
       echo $this->price."<br>";
       echo $this->description."<br>";
       echo $this->writer."<br>";
       echo $this->color ."<br>";
       echo $this->supplier;
    }
    public function choose_publisher($publisher)
    {
        if(in_array($publisher,$this->publishers))
        {
            return $publisher;
        }
        else{
            return "publisher not found";
        }
    }

}