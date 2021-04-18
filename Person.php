<?php

class Person
{
    public $alive = 'yes';
    public function greetp()
    {
        return "Hola $this->name <br>";
        // var_dump($this);
    }
}
