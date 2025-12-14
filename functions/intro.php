<?php
//introducton to function
//named function
// function hello():
// {
//     echo "Hello, World!";
// }
// hello();
// //function with parameter
// function hello_user($name)
// {
//     echo "Hello, $name!";
// }
// $user="Ram";
// hello_user($user);
//parameters with default value

// function add($a=1,$b=4,$c=2)
// {
//     return $a+$b+$c;
// }
// add();

// function div($a,$b)
// {
//     echo $a/$b;
// }
// div(b:2,a:5);
// function hello_na($name,$age)
// {
//     echo "Hello, $name. You are $age years old.";
// }
// hello_na(age:20,name:"Ram");
//function with return type

function can_vote($age)
{
if($age>=18)
{
    return true;
}
else
{
    return false;
}
}


if(can_vote(19)){
    echo"welcome to booth ";
}
if(can_vote(19)){
    echo"give your nails to paint";
}
?>  
