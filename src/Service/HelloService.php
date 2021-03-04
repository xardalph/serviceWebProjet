<?php
// src/Service/HelloService.php
namespace App\Service;

class HelloService
{
    private $mailer;

    public function __construct()
    {
        $this->mailer = "this is the mailer";
    }

    public function hello($name)
    {

        $message = "this is the message";

        return $message;
    }
}