<?php
class Ai extends Course{
private $important_note = "Note : Before the course you should know basics of programming and OOP<br>";
public function notes()
{
    echo $this->important_note;
}
}