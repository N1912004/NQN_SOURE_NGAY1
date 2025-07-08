
    <!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Welcome to My PHP Page</h1>
<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
echo "This lesson is about fuctions in PHP.<br>";
//functio is a " block of code that can be reused in your program.
$x =123 ;
function greet($name) {
     global $x;
    $y =$x;
    return "$x Hello, " . htmlspecialchars($name) . "!"."$y";
}
// Example usage of the function
echo "x = $x<br>";
$name= "Nghi";
echo greet($name) . "<br>";
function sum($a=0, $b=0){
    return $a + $b;
}
echo sum(2,3);
$multiply = function($a, $b) {
    return $a * $b;
};
echo "<br>Multiply: " . $multiply(2, 3) . "<br>";

$substract = fn($a, $b) => $a - $b;
echo "Substract: " . $substract(5, 2) . "<br>";
$name = ['joe', 'john', 'jane'];
echo " number of items in array: " . count($name) . "<br>";
var_dump(in_array('joe',$name));
array_push($name, 'james');
print_r($name);
array_unshift($name, 'james2');
print_r($name);
*/
    $numbers = range(1, 10);
    print_r($numbers);
    $squared_numbers = array_map(fn($each_number)=>$each_number**2, $numbers);
    print_r($squared_numbers);
    $words = ['hello', 'word'];
    $upper = array_map(fn($each_word)=>strtoupper($each_word), $words);
    print_r($upper);

    $a =["1314. ", "3423"];
    $c = array_map(fn($x) => trim(htmlspecialchars($x)) , $a);
    print_r($c);
?>
</pre>
</body>
</html>