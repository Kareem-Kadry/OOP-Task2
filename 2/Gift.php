<?php
class Gift{
    public function __construct($name,$price,$descsription)
    {
        $this->name = $name;
        $this->price=$price;
        $this->description = $descsription;
    }
    public function get_details()
    {
       echo $this->name."<br>";
       echo $this->price."<br>";
       echo $this->description."<br>";
    }
}