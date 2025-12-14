 <?php
// $name="Ram";
// $age=20;

// echo "Hello, $name. You age is $age. \n";

// function abc()
// {
//     $adress="Kathmandu";
// }

// print_r($GLOBALS);

$name="ram";
$age=10;
function hello(){

    $GLOBALS['name'] = "hari";
    global $name;
    $adress="Kathmandu";
    $GLOBALS['adress']=$adress;

    echo "hello $name you live in $adress \n";
}

hello();

echo"helo $name  : $adress \n";
