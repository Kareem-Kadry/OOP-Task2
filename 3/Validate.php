<?php
class Validate{
    private $email;
    private $password;
    private $errors = [];
    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function check_empty_email()
    {
        if(empty($this->email))
        {
            $this->errors[] = "email is required";
        }
    }
    public function validate_email() {
        if (!(filter_var($this->email, FILTER_VALIDATE_EMAIL))&&!empty($this->email)) {
            $this->errors[] = "Wrong email";
        }
    }
    public function check_empty_password()
    {
        if(empty($this->password))
        {
            $this->errors[] = "password is required";
        }
    }
    public function validate_password()
    {
        if((strlen($this->password))>8)
        {
            $this->errors[] = "max password chars is 8";
        }
    }
    public function getErrors() {
        foreach ($this->errors as $error)
        {
            echo $error."<br>";
        }
  
    }
    
}
