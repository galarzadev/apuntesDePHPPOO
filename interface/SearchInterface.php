<?php

interface Search 
{ 
    public function all();
}

class User implements Search
{
    public function all()
    {
        return "Obteniendo usuarios";
    }
}
class Post implements Search
{
    public function all()
    {
        return "Obteniendo post";
    }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();

// final public class/function * con final no se deja sobreescribir al heredarse
//la interfaz es el esquema que se debe cumplir - contrato