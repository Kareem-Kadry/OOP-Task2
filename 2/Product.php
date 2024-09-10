<?php 
class Product{
    protected $name;
    protected $price;
    protected $description;
    protected $image;
    public function upload_image($image)
    {
        $this->image = $image;
    }
    public function calc_price()
    {
        return $this->price;
    }
}