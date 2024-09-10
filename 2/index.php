<?php
require_once 'Product.php';
require_once 'Book.php';
require_once 'Baby_Car.php';
require_once 'Gift.php';

//book1
$book1 = new Book("Book1",30,"Hestory Book","Al ahram","Hossam Hassan","black","ayhaga");
$book1->upload_image("01.jpg");
echo $book1->calc_price()."<br>";
echo $book1->choose_publisher("pub")."<br>";
$book1->get_details();
echo "<br><br><br>";
//baby car 1
$baby_car1 = new Baby_Car("baby car 1",300,"A car for the baby","2 years","15 kgm",1);
$baby_car1->get_details();
echo "<br><br><br>";
//gift 1
$gift1 = new Gift("Gift 1",150,"A new gift for your friend");
$gift1->get_details();