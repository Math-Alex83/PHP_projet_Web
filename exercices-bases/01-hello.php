<?php
function helloWorld():void
{
    echo"Hello World ! ";
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