<?php 
class Intro_To_Programming extends Course{
    private $language;
    public function set_language($language)
    {
        $this->language = $language;
    }
    public function get_language()
    {
        echo "language during this course is : $this->language<br>";
    }
}