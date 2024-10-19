<?php
echo "Hello world";

$data_one=12;

echo $data_one;

$data_two = 45;

$sum = $data_one + $data_two;

echo '<br>Sum is=' . $sum. '<br>';

//Loops-for, while, do-while, foreach

for ($index = 1; $index <= 10; $index++) {
    echo $index . '<br>';
}
//$array-index array,associative array

$index_array = array(
    'Karim',
    'Rahim',
    113456,
    'ab',
    12.5
);

//debugger
echo '<pre>';
print_r($index_array);
var_dump($index_array);

echo 'Print using for loop<br>';
for ($index = 0; $index < count($index_array); $index++) {
    echo $index_array[$index] . '<br>';
}


echo 'Print using foreach loop<br>';
foreach ($index_array as $value) {
    echo $value . '<br>';
}

function  sum($firstNumber,$secondNumber)
{
    return $firstNumber+$secondNumber;
}
echo 'The sum of two numbers:<br>';
echo sum(10,12);

?>