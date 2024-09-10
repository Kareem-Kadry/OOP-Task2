<?php
class Course{
    public $title;
    public $instructor;
    public $duration;
    public $description;
    public function enroll($student_name)
    {
        echo $student_name." has successfully inrolled to course ".$this->title."<br>";
    }
    public function get_details()
    {
        echo $this->title ." : " . $this->description."<br>";
    }
}
