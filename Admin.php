<?php

include 'Person.php';

class Admin extends Person 
{
    public $name = 'Administradora'; 
    public function greeta()
    {
        return "hola soy Admin y no me pueden cambiar <br>";
    }
}