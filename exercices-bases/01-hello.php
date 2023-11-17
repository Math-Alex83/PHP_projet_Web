<?php
<<<<<<< HEAD
function helloWorld(): void
{
    echo "Hello World ! ";
=======
echo"EXERCICES PHP 00/Serie 1 : Introduction";
echo"<hr>";
function helloWorld():void
{
    echo"Hello World ! ";
    echo"<hr>";
>>>>>>> c2911e336c8018259a63da3e32cba1d654c87802
}
helloWorld();


function hello(string $name): string
{
    if ($name != "") 
    {
        return "Hello $name";
    } else 
    {
        return "Hello Mr.Nobody";
    }
}
echo hello("");