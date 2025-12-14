<?php

function hello( string $name, int $age):void
{

    echo "Hello, $name. You age is $age ";
}
hello("ram",23);
//enforcing on return data type

function hi( string $name, int $age):array
{

    return [$name,$age];
}
 print_r(hi( "shyam",24));