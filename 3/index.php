<?php
require_once 'Validate.php';
$obj1 = new Validate("hgf@email.com","eetryrytytttut");
$obj1->check_empty_email();
$obj1->validate_email();
$obj1->check_empty_password();
$obj1->validate_password(5);
$obj1->getErrors();