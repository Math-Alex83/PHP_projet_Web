<?php
echo"EXERCICES PHP 00/Serie 1 : Introduction";
echo"<hr>";
function helloWorld():void
{
    echo"Hello World ! ";
    echo"<hr>";
}
helloWorld();


function hello(string $name):string
{
    if ($name != "") {
        return "Hello $name";
    } else {
        return "Hello Mr.Nobody";
    }
    
    
}
echo hello("");