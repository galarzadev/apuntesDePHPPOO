<?php
/*PROGRAMACIÓN ORIENTADA A OBJETOS CON PHP
clases
objetos
herencia
abstraccion
polimorfismo*/
// include 'User.php';
include 'greet.php'; //el orden de los includes importa
include 'Admin.php';
class User
{
    public $type;
}

$user = new User;
$user->type = new Admin;
echo $user->type->greeta();

//include
//require (lo EXIGE)
//require once (lo EXIGE una sola vez. verifica que ya esté)Se recomienda siempre usar require_once dado que esta función no permitirá la sobreescritura de ningún archivo en el código

echo greet('Sergio', 'como estas');

// class Admin extends Person 
// {
//     public $name = 'Administrador';
// }

$user2 = new User;
$user2->type = new Admin;
echo $user2->type->greeta();
echo $user2->type->greetp();
$user2->type->name = 'Soy el nuevo admin xdxd';
echo $user2->type->greetp();
echo "<pre>";
var_dump ($user2);
echo "<pre>";
echo "<br>";
var_dump (__DIR__);

/*alcance, principio de ocultacion, encapsulamiento
public
protected
private
*/

/* polimorfismo
, si yo heredo una clase, puedo cambiar el comportamiento de sus métodos sobreescribiéndolos,
*/

