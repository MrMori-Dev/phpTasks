<?php
class User
{
    private $userName;
    private $phoneNumber;
    private $email;
    function __construct($userName, $phoneNumber, $email)
    {
        $this->userName = $userName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }
    function set_userName($userName)
    {
        $this->userName = $userName;
    }
    function set_phoneName($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function get_userName(): string
    {
        return $this->userName;
    }
    function get_phoneNumber(): string
    {
        return $this->phoneNumber;
    }
    function get_email(): string
    {
        return $this->email;
    }
}